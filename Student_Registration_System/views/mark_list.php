<?php
 //
 //
  include "header.php";
?>
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
		text-align:center;
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
 include '../config/connection.php';
include '../controllers/student_controller.php';
include '../controllers/controller.php';
  include "header.php";

    $connection = new PDO($dsn, $username, $password, $options);
    
    $sel  = "Select * from mark_list";
            $statement = $connection->prepare($sel);
            $statement->execute();
            $result = $statement->fetchAll();
            if ($result && $statement->rowCount() > 0)
            {
                ?>
<center>
           
	   <table border="2px">
            <thead>
			
            <tr>
			        <th>ID</th>
                    <th>Register no</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Department</th>
                    <th>Subject</th>
                    <th>Mark</th>
            </tr>			
            </thead>	
            <tbody>
<?php	   
            foreach ($result as $row) 
			{ 
?>
            <tr>
            <td><?php echo ($row["s_id"]); ?></td>
            <td><?php echo ($row["reg_no"]); ?></td>
            <td><?php echo ($row["name"]); ?></td>
            <td><?php echo ($row["course"]); ?></td>
            <td><?php echo ($row["dept"]); ?></td>
            <td><?php echo ($row["sub"]); ?></td>
			<td><?php echo ($row["mark"]); ?></td>
            </tr>
<?php         
		}?>
		</tbody></table></center>

 <?php
}
   include "footer.php";
?>