<?php
 


   
	include_once "../views/header.php";
	include_once "../controllers/student_controller.php";
 	
	
    
	class student_model
	{

	public function insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     echo $sql="INSERT INTO student (reg_no, fname, lname, mobile, email, dept_name, course_name, sem_no, username, password)
              VALUES ('$reg_no', '$fname', '$lname', '$mobile', '$email', '$dept',  '$course', '$sem', '$uname', '$psw')";

	     $connection->exec($sql);
	     echo $sql;
         echo "New record created successfully";
	}


public function ins($reg_no,$name,$course,$dept,$sub,$mark)
	{
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     echo $sql="INSERT INTO mark_list(reg_no,name, course, dept, sub, mark)
              VALUES ('$reg_no', '$name', '$course', '$dept', '$sub', '$mark')";

	     $connection->exec($sql);
	     echo $sql;
         echo "New record created successfully";
	}


	public function update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    echo $sql = "UPDATE student SET reg_no='$reg_no', fname='$fname', lname='$lname', mobile='$mobile', email='$email', dept_name='$dept', course_name='$course', sem_no='$sem', username='$uname', password='$psw'";
	    $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
    }

    public function login($uname,$psw,$user_type)
	{
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    session_start();

		   
		    if($user_type=="1")
		    {
		          $stmt = $connection->prepare("SELECT * FROM admin WHERE username='$uname' AND password='$psw'"); 
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  if ($result && $stmt->rowCount() > 0)
		            {
			          foreach ($result as $row) 
			            { 
	
?>
                          <tr>
                          
                          <td><?php echo ($row["email"]); ?></td>
                          <td><?php  echo ($row["id"]); ?></td>
                          <?php  header('Location:admin_dashboard.php');?>

<?php		
                        } 
                     $_SESSION['uname'] = $uname;
			        } 

			      else
			         { 
                         header( "Location:login.php" );
                         echo "Wrong credentials";
                     }
            } 
           else if($user_type=="2")
		    {
		          $stmt = $connection->prepare("SELECT * FROM student WHERE username='$uname' AND password='$psw'"); 
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  if ($result && $stmt->rowCount() > 0)
		            {
			          foreach ($result as $row) 
			            { 
	
?>
                          <tr>
                          
                          <td><?php echo ($row["email"]); ?></td>
                          <td><?php  echo ($row["index_no"]); ?></td>
                          <?php  header('Location:student_dashboard.php');?>

<?php		
                        } 
                     $_SESSION['uname'] = $uname;
			
			        } 

			      else
			         { 
                         header( "Location:login.php" );
                         echo "Welcome".$uname;
                     }
            } 
            else if($user_type=="8")
		    {
		          $stmt = $connection->prepare("SELECT * FROM guest WHERE username='$uname' AND password='$psw'"); 
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  if ($result && $stmt->rowCount() > 0)
		            {
			          foreach ($result as $row) 
			            { 
	
?>
                          <tr>
                          
                          <td><?php echo ($row["email"]); ?></td>
                          <td><?php  echo ($row["index_no"]); ?></td>
                          <?php  header('Location:guest_dashboard.php');?>

<?php		
                        } 
                     $_SESSION['uname'] = $uname;
			
			        } 

			      else
			         { 
                         header( "Location:login.php" );
                         echo "Welcome".$uname;
                     }
            } 
	}	
  public function remove($index)
	{
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    $sql = "DELETE FROM  student  WHERE index_no=?";
	        $statement = $connection->prepare($sql);
            $statement->execute(array($index));
	        header("Location:student_list.php");
	       
    }

 
   public function view($index)
	{
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    $sql = "SELECT * FROM  student  WHERE index_no=?";
	        $statement = $connection->prepare($sql);
            $statement->execute(array($index));
	        header("Location:student_view.php?id=<?=$index");
	       
    }

 
 public function sub_insert($sem, $year, $sem_name, $sub_code)
	{
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     echo $sql="INSERT INTO sub_add (sem,year,sem_name,sub_code)
              VALUES ('$sem', '$year', '$sem_name', '$sub_code')";

	     $connection->exec($sql);
	     echo $sql;
         echo "New record created successfully";
         header("Location:sub_view.php");
	}




}

?>
