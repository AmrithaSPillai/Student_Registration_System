<?php
 //
 //
include "header.php";
include '../config/connection.php';
include '../controllers/student_controller.php';
include '../controllers/controller.php';
  include "header.php";
   if(isset($_POST['submit'])){
    $reg_no=$_POST['reg_no'];
       $name=$_POST['name'];
    $course=$_POST['course'];

    $dept=$_POST['dept'];
    $sub=$_POST['sub'];
    $mark=$_POST['mark'];
    $con=new student_controller();
    $con->save_mark($reg_no,$name,$course,$dept,$sub,$mark);
  }
?>
<div class="row">
   <div class="login" style="text-align: center;">
   <form action="" method="post">
    <h1>   Add Mark </h1>
	<input type="text" name="reg_no" class="fld" placeholder="Register no."><br><br>
	<input type="text" name="name" class="fld" placeholder="Name"><br><br>
	<select name="course" class="fld">
	           <option value="BCA" class="fld">BCA</option>					 
               <option value="MCA" class="fld">MCA</option>
               <option value="BTECH" class="fld">BTECH</option>	
			   <option value="MTECH" class="fld">MTECH</option>
</select><br><br>
	<select name="dept" class="fld">
	           <option value="CSE" class="fld">CSE</option>					 
               <option value="EC" class="fld">EC</option>
               <option value="MECH" class="fld">MECH</option>	
			   <option value="CE" class="fld">CE</option>
    </select><br><br>
	
	<select name="sub" class="fld">
        <option>Subject</option>
		<option value="CS">CS</option>
        <option value="ES">ES</option>
        <option value="DS">DS</option>
        <option value="MS">MS</option>
        
    </select><br><br>
        
        <input type="text" name="mark" class="fld" placeholder="mark"><br><br>
	    
	    
	<input type="submit" name="submit" class="btn" value="Submit">

	<input type="submit" name="Cancel" class="btn" value="Cancel">
	
	
   </form>
 </div>
 </div>
 <?php
   include "footer.php";
?>