 <?php
    require "../config/connection.php";
	include "header.php";
	$connection = new PDO($dsn, $username, $password, $options);
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body style="background-image:url('img/bg.jpg');">
	<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<script>
			function valid()
           {
             var uname1=document.login.usname.value;
			 var password1=document.login.pswd1.value;
if(uname1==""||uname1==null)
{
alert("username can't bee blank");
document.login.usname.focus();
return false;
}
else if(password1.length<6){
alert("password must be 6");
document.login.pswd1.focus();
return false;
}
else{

return true;
}
}
</script>

			<form action="validate.php" method="post"  name="login" onsubmit="return valid()">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user"  name="usname" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pswd1" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
				</form>
			</div>
			


<!---?php include "../footer.php";?>