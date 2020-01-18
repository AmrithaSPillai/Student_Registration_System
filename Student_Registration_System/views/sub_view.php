 <!--
   * Student List Visibility for Trainer/ Admin
   * Author: Riya
   *
  -->
 <style>
     table,td,th
    {
		margin:10px auto;
		border:2px solid #663300;
        border-collapse:collapse; 
        text-align:center;
        padding:20px;
        background:rgba(0,0,0,0.5);
		color:white;
    }
  th
    {
		background-color: black;
	}
h2  {
	  text-align:center;
	  color:tomato;
	}
a   {
	 text-decoration:none;
	 color:white;
	}
 </style>
 <?php
     include "header.php";
     include '../config/connection.php';
     include '../controllers/student_controller.php';
     include '../controllers/controller.php';
	session_start();
	if($_SESSION["uname"]) 
	               {
					    $_SESSION["uname"]; 

            
	$connection = new PDO($dsn, $username, $password, $options);
	
    $sel  = "Select * from sub_add";
			$statement = $connection->prepare($sel);
            $statement->execute();
            $result = $statement->fetchAll();
			if ($result && $statement->rowCount() > 0)
		    {
?>
<div class="container-fluid">
  <div class="row content">
          
                 <table border="2px">
            <thead>
			<tr>
			<td colspan="9">
			  <input type="text" name="search" class="fld"  onkeyup="showHint(this.value)">
			  <input type="submit" name="submit" value="Search" class="btn">
			</td>
			</tr>
                <tr>
                    <th>ID</th>
                    <th>Semester</th>
                    <th>Year</th>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    
                </tr>
            </thead>
            <tbody>
<?php	    foreach ($result as $row) { 
?>
                <tr>
                <td><?php echo ($row["id"]); ?></td>
                <td><?php echo ($row["sem"]); ?></td>
                <td><?php echo ($row["year"]); ?></td>
                <td><?php echo ($row["sem_name"]); ?></td>
                <td><?php  echo ($row["sub_code"]); ?></td>
               
                    
                
			    </tr>
			  
        <?php } ?>
        </tbody>
		
    </table>
	</div></div>
    <?php 
      } 
      else {  echo "No results found..."; } 
      require "footer.php";
  }
   //session end
 ?>