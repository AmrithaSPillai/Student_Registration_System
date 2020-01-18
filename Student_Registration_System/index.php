<?php
  include "header.php";
  include_once "controllers/controller.php";
  include('config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    $conn=new controller();
    $conn->reg();
  }
  if(isset($_POST['login'])){
    $conn=new controller();
    $conn->login();
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Home </h1>
    <input type="submit" name="submit" class="btn" value="Register">
	<input type="submit" name="login" class="btn" value="Login"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>