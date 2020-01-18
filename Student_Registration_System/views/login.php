<?php
  include "header.php";
  include_once "../controllers/student_controller.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    $user_type=$_POST['user_type'];
    $uname=$_POST['user_name'];
    $psw=$_POST['password'];
    $conn=new student_controller();
    $conn->login_data($user_type, $uname, $psw);
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Login </h1>
    <select name="user_type" class="fld"> 
        <option>select user</option>
        <option value="8">Super User</option>
        <option value="1">Admin</option>
        <option value="2">Student</option>
    </select>
	<input type="text" name="user_name" class="fld" placeholder="User Name">
	<input type="text" name="password" class="fld" placeholder="Password"><br>
	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>