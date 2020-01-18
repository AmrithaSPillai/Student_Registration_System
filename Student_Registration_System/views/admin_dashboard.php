<?php
include "header.php";
include '../config/connection.php';
include '../controllers/student_controller.php';
include '../controllers/controller.php';
$connection = new PDO($dsn, $username, $password, $options);
 session_start();
                if($_SESSION["uname"]) 
	               {
					   echo"<h2> Welcome ". $_SESSION["uname"]; 
	                
if(isset($_POST['logout'])){
    $conn=new student_controller();
    $conn->logout();
  }
 if(isset($_POST['edit1'])){
    $conn=new controller();
    $conn->update_form1();
  }
   if(isset($_POST['log_mgmnt'])){
    $conn=new controller();
    $conn->stud_list();
  }
     if(isset($_POST['acad_mgmnt'])){
    $conn=new controller();
    $conn->acad_list();
  }
   if(isset($_POST['stud_mgmnt'])){
    $conn=new controller();
    $conn->stud_mark_list();
  }
?>
<style>

	.menu{
	    display:block;
		position:absolute;
		background-color:#45B39D ;
		margin-top:15px;
		margin-left:-22px;
		border-radius:5px;
		height:100%;	
}
.menu ul{
list-style:none;}
.menu ul li{
	
}

.btnd 
	{
		border:none;
		background:#1F618D;
		width:250px;
		margin:10px;
		padding:10px;
		border-radius:10px;
		color:white;
		padding:20px;
	}

</style>
<div class="row content ">
    <div class="col-sm-3 sidenav">
     <div class="login_x">
      <ul class="nav nav-pills nav-stacked">
      	    <form action="" method="post">
             <li ><input type="submit" class="btn-danger btnd active" name="dashboard" value="Dashboard"></li>
			 <li><input type="submit" class="btnd" name="stud_mgmnt" value="Student Management"></li>
			  <li><input type="submit" class="btnd" name="log_mgmnt" value="Login Management"></li>
			  <li><input type="submit" class="btnd" name="acad_mgmnt" value="Academic Manangement"></li>
			 <li><input type="submit" value="Edit Profile" class="btnd" name="editx"></li>
			 <li><input type="submit" class="btnd" name="settings" value="Settings"></li>
			 <li><input type="submit" class="btnd" name="logout" value="Logout 	"></li>
			</form>
		</ul>
	</div>
	</div>

	<div class="col-sm-3 contents">
      <hr>
      <h5><span class="	glyphicon glyphicon-time"></span><?php  ?></h5>
      <img src="imgs/total_users.png">
				<?php 
				$num = $connection->query("select count(index_no) from student")->fetchColumn();
				echo $num. "+ <br>students"; ?>
    </div>

	 &nbsp; 

    <div class="col-sm-3 contents ">
    	<div class="well">
      <hr>
      <form action="" method="post">
        </form>
</div>
    </div>


 </div>
 
<?php 
}// session end
?>