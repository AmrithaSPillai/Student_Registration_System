<?php

  include "header.php";
    include_once "../controllers/student_controller.php";
    include '../controllers/controller.php';

  if(isset($_POST['submit'])){
   echo $sem=$_POST['sem'];
   echo  $year=$_POST['year'];
   echo  $sem_name=$_POST['sub_name'];
   echo  $sub_code=$_POST['sub_code'];
    $con=new student_controller();
    $con->subject($sem, $year, $sem_name, $sub_code);
    
  }
?>
<div class="row">
   <div class="login" style="text-align: center;">
   <form action="" method="post">
         <h1>   Add New Subject </h1>
	
	<select name="year" class="fld" >
	           <option value="">Year</option>
	           <option value="1" class="fld">1</option>					 
               <option value="2" class="fld">2</option>
               <option value="3" class="fld">3</option>	
			   <option value="4" class="fld">4</option>
    </select><br><br>
	<select name="sem" class="fld" >
        <option value="">Semester</option>
		    <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select><br><br>
        <input type="text" name="sub_name" class="fld" placeholder="Subject name" ><br><br>
        <input type="text" name="sub_code" class="fld" placeholder="Subject code" required><br><br>
	
	<input type="submit" name="submit" class="btn" value="submit">
	
  <input type="submit" name="Cancel" class="btn" value="Cancel">

   </form>
 </div>
 </div>
 <?php
   include "footer.php";
?>