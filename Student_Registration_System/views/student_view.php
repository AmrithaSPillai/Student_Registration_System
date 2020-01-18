<?php   
include "header.php";
     include '../config/connection.php';
     include '../controllers/student_controller.php';
     include '../controllers/controller.php';  
	$connection = new PDO($dsn, $username, $password, $options);
     session_start();
                if($_SESSION["uname"]) 
	               {
					    $_SESSION["uname"]; 
	                
 if(isset($_POST['back'])){
    $conn=new controller();
    $conn->back();
  }

	$id=$_GET['id'];
    $sel  = "Select * from student";
			$statement = $connection->prepare($sel);
            $statement->execute();
            $result = $statement->fetchAll();
			if ($result && $statement->rowCount() > 0)
		    {
?>
<div class="container-fluid">
  <div class="row content">
         <?php	    foreach ($result as $row) { 
?> 
                 <table border="2px"  cellpadding="10px" >
            <thead>
			<tr>
				<center>
			<td colspan="2">
			 <h2> Student Details </h2>
			</td></center>
			</tr>
                <tr>
                    <th>ID</th>
                    <td><?php echo ($row["index_no"]); ?></td>
                </tr>
                <tr>
                    <th>Reg No</th>
                    <td><?php echo ($row["reg_no"]); ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                     <td><?php echo ($row["fname"])."  ".($row["lname"]); ?></td>
                 </tr>
                <tr>
                    <th>Department/Course</th>
                    <td><?php echo ($row["dept_name"])."/".($row["course_name"]); ?></td>
                 </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo ($row["email"]); ?></td>
                 </tr>
                <tr>
                    <th>Mobile</th>
                    <td><?php  echo ($row["mobile"]); ?></td>
                 </tr>
                <tr>
                    <form action="" method="post">
                    <center> <td colspan="2"><input type="submit" class=" btn-success" name="back" value="Back to List"></td></center>
                </form>

                 </tr>
                
            </thead>
           
    </table>
    <?php
}
}
} 
?>

