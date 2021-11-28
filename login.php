<?php
session_start();
include_once "dbconnect.php";
?>
<?php
if(isset($_SESSION['msg']))
	{
		echo "<script type='text/javascript'>alert('Please login first');</script>";
		unset($_SESSION['msg']);
		}
	
	
if(isset($_REQUEST['scheck']))
{$usr=$_REQUEST['usr'];
	$pwd=$_REQUEST['pwd'];
	if(empty($usr)||empty($pwd))
{echo "<script type='text/javascript'>alert('Please fill in the details');</script>";
	//echo"please fill in the details";
}else {
	$hash=md5($pwd);
	$check=mysql_query("select count(*) as crumrows from users where USERNAME='$usr' and password='$hash'") ;
	$numrows = mysql_result($check, 0, 'crumrows');
	
	/*$check2=mysql_query("select count(*) as mailrows from users where password='{md5($pwd)}'") ;
	$mailrows=mysql_result($check2, 0, 'mailrows');*/
	
	if($numrows>0){
		$getid=mysql_query("select id from users where username='$usr'");
		$results=mysql_fetch_assoc($getid);
		//echo "<script type='text/javascript'>alert('Login Successful redirecting you in 2 sec Please click ok');
		$_SESSION['session_user']=$usr;
		$_SESSION['user_id']=$results['id'];
		
		echo "Login Succesful";
		header('Refresh: 2;url=explore.php');
		}
	else{
		echo "<script type='text/javascript'>alert('Username or Password Incorrect');</script>";}
	
	}
	
	
		
	 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="loginsheet.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor: Login</title>
</head>

<body>
<div id="header">
<ul>
        <li><img id="left" src="logo3.jpg" width="78" height="39" /></li>
        <li><span id="explore">
       <form action="explore.php" method="get">
       <input type="submit" value="Explore" name="e_submit" />
       </form></span></li>
        <li>
        <span id="signup">
       <form action="signup.php" method="get">
       <input type="submit" value="Sign up" name="e_submit" />
       </form></span>
       </li>
       <li><span id="login2">
       <a  href="login.php">Login</a></span></li></ul></div>
        <br /><br /><br /><br /><br /><br />
        <?php if(isset($log_msg)){echo $log_msg;}?>
<table id="tab" border="0">
<form method="POST" action="">

<tr>
<td height="52" colspan="2">
<!--<b>Username:</b>--><input type="text" name="usr"   placeholder="Username or Email" height="30px" required/></td>
</tr>
<tr>
<td height="52" colspan="2">
<!--<b>Password :</b>--><input type="password" name="pwd" placeholder="Password" required/></td>
</tr>
<tr>
<td height="89" colspan="2">
<span id="Bsubmit">
  <input  type="submit" name="scheck" value="Login" /></span>
</td></tr>
<tr><td colspan="2"><a href="forgot.php">Forgot Password?</a></td></tr>
</form>
</table>
<!-- Footer -->
<?php include "footer.html";?>
</body>
</html>
