<?php
 
  include "header.php";
  include_once "../controllers/student_controller.php";

  if(isset($_POST['submit'])){
    $reg_no=$_POST['reg_no'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $course=$_POST['course'];
    $year=$_POST['d_from'];
    $sem=$_POST['sem'];
    $uname=$_POST['user_name'];
    $psw=$_POST['password'];
    $con=new student_controller();
    $con->save_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
  }
?>
<div class="row">
  <div class="login" style="text-align: center;">
   <form action="" method="post">
    <h1>   Student Registration </h1>
	<input type="text" name="reg_no" class="fld" placeholder="Registration Number"> <br>
	<input type="text" name="fname" class="fld" placeholder="First Name"> <br>
	<input type="text" name="lname" class="fld" placeholder="Last Name"> <br>
	<input type="text" name="mobile" class="fld" placeholder="Mobile"> <br>
	<input type="text" name="email" class="fld" placeholder="Email"><br>
	
	<select name="dept" class="fld"> 
        <option>select</option>
		<option value="bca">BCA</option>
        <option value="mca">MCA</option>
        <option value="btech"> B.Tech</option>
        <option value="mtech"> M.Tech</option>
        <option value="phd"> PHD</option>
    </select> <br>
	<select name="course" class="fld">
        <option>select</option>
		<option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="aero">AERO</option>
        <option value="it"> IT</option>
    </select><br>
	 
	<input type="date" name="d_from" class="fldx"> to
	<input type="date" name="d_to" class="fldx"> <br>
	<select name="sem" class="fld">
        <option>select</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select> <br>
	<input type="text" name="user_name" class="fld" placeholder="User Name"> <br>
	<input type="text" name="password" class="fld" placeholder="Password"> <br>
	<input type="text" name="cpassword" class="fld" placeholder="Confirm Password"><br>
	
	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
 </div>
</div>



<?php
   include "views/footer.php";
?>
