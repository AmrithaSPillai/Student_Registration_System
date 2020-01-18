
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

    if(isset($_POST['remove'])){
        $index=$_POST['index'];
    $conn=new student_controller();
    $conn->remove_data($index);
  }
 if(isset($_POST['suspend'])){
    $index=$_POST['index'];
    $conn=new student_controller();
    $conn->suspend_data($index);
  }
   if(isset($_POST['view'])){
    $index=$_POST['index'];
    $conn=new student_controller();
    $conn->view_data($index);
  }
	                
	$connection = new PDO($dsn, $username, $password, $options);
	
    $sel  = "Select * from student";
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
                    <th>Reg No</th>
                    <th>Name</th>
                    <th>Department/Course</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th> Actions </th>
                    <th>Profile</th>
                    
                </tr>
            </thead>
            <tbody>
<?php	    foreach ($result as $row) { 
?>
                <tr>
                <td><?php echo ($row["index_no"]); ?></td>
                <td><?php echo ($row["reg_no"]); ?></td>
                <td><?php echo ($row["fname"])."  ".($row["lname"]); ?></td>
                <td><?php echo ($row["dept_name"])."/".($row["course_name"]); ?></td>
                <td><?php echo ($row["email"]); ?></td>
                <td><?php  echo ($row["mobile"]); ?></td>
                <form action="" method="post">
                    <input type="hidden" name="index" value="<?php echo ($row["index_no"]); ?>">
                <td><input type="submit" class="btn-danger" name="remove" value="Remove">&nbsp;
                <input type="submit" name="suspend" class=" btn-warning" value="Suspend">
                </td>
                <td><input type="submit" class=" btn-success" name="view" value="View Profile">
                </td>
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
  
 ?>