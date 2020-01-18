<?php
include_once '../models/student_model.php';

	
	 class student_controller{
	public function save_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    echo "student";
	    $obj = new student_model();
	    $obj->insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	}
	public function save_mark($reg_no,$name,$course,$dept,$sub,$mark)
	{
	    echo "student";
	    $obj = new student_model();
	    $obj->ins($reg_no,$name,$course,$dept,$sub,$mark);
	}
	public function update_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	    echo "student edit";
	    $obj = new student_model();
	    $obj->update($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	}
	
    public function login_data($user_type, $uname, $psw)
	{
		echo "type".$user_type;
	    echo "student login";
	    $obj = new student_model();
	    $obj->login($uname,$psw,$user_type);
	}
	  public function remove_data($index)
	{
	    echo "student login";
	    $obj = new student_model();
	    $obj->remove($index);
	}
	  public function view_data($index)
	{
	    echo "student login";
	    $obj = new student_model();
	    $obj->view($index);
	}
	  public function subject($sem, $year, $sem_name, $sub_code)
	{
	    echo "student Subject Insert";
	    $obj = new student_model();
	    $obj->sub_insert($sem, $year, $sem_name, $sub_code);
	}


	public function logout()
	{
		session_destroy();
		unset($_SESSION['uname']);
		header('Location:../index.php');
	}
  }	 

?>