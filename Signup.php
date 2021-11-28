<?php session_start();
include_once "dbconnect.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="loginsheet.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor: Sign up</title>
</head>

<body>
<div id="header">
<ul>
        <li><img id="left" src="logo3.jpg" width="78" height="39" /></li>
        <li><span id="explore">
       <form action="explore.php" method="get">
       <input type="submit" value="Explore" name="e_submit" />
       </form></span>
       </li>
        <li>
        <span id="signup">
       <form action="signup.php" method="get">
       <input type="submit" value="Sign up" name="e_submit" />
       </form></span></li>
       <li><span id="login2">
       <a  href="login.php">Login</a></span></li></ul></div>
       <br /><br /><!--<br /><br /><br /><br />-->
        <table id="tab" border="0">
<form method="POST" action="">

<tr><td><b>Name:</b></td>
<td height="52" colspan="2">
<input type="text" name="name"  height="30px" required/>
</td>
<td id="red">*</td>
</tr>
<tr>
<td><b>Username:</b></td><td colspan="2"><input type="text" name="usr" required/>
</td>
<td id="red">*</td>
</tr>
<tr><td><b>Email:</b></td><td colspan="2"><input type="text" name="email" required/>
</td><td id="red">*</td>
</tr>
<tr><td><b>Password:</b></td><td height="52" colspan="2"><input type="password" name="pwd" placeholder="*6 characters at least" required/></td><td id="red">*</td>
</tr>
<tr><td><b>Repeat password:</b></td><td colspan="2"><input type="password" name="rpwd" required/>
</td><td id="red">*</td>
</tr>
<tr><td><b>Birthdate:</b></td><td colspan="2">
<select name="Date"  >
<option value="Date" >Date</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option value=5>5</option>
    <option value=6>6</option>
    <option value=7>7</option>
    <option value=8>8</option>
    <option value=9>9</option>
    <option value=10>10</option>
    <option value=11>11</option>
    <option value=12>12</option>
    <option value=13>13</option>
    <option value=14>14</option>
    <option value=15>15</option>
    <option value=16>16</option>
    <option value=17>17</option>
    <option value=18>18</option>
    <option value=19>19</option>
    <option value=20>20</option>
    <option value=21>21</option>
    <option value=22>22</option>
    <option value=23>23</option>
    <option value=24>24</option>
    <option value=25>25</option>
    <option value=26>26</option>
    <option value=27>27</option>
    <option value=28>28</option>
    <option value=29>29</option>
    <option value=30>30</option>
    <option value=31>31</option>
</select>
<select name="Month">
    <option value="Month">Month</option>
    <option value=01>Jan</option>
    <option value=02>Feb</option>
    <option value=03>Mar</option>
    <option value=04>Apr</option>
    <option value=05>May</option>
    <option value=06>Jun</option>
    <option value=07>Jul</option>
    <option value=08>Aug</option>
    <option value=09>Sep</option>
    <option value=10>Oct</option>
    <option value=11>Nov</option>
    <option value=12>Dec</option>
</select>
<select name="Year">
<option value="Year">Year</option>
    <option value=1920>1920</option>
    <option value=1921>1921</option>
    <option value=1922>1922</option>
    <option value=1923>1923</option>
    <option value=1924>1924</option>
    <option value=1925>1925</option>
    <option value=1926>1926</option>
    <option value=1927>1927</option>
    <option value=1928>1928</option>
    <option value=1929>1929</option>
    <option value=1930>1930</option>
    <option value=1931>1931</option>
    <option value=1932>1932</option>
    <option value=1933>1933</option>
    <option value=1934>1934</option>
    <option value=1935>1935</option>
    <option value=1936>1936</option>
    <option value=1937>1937</option>
    <option value=1938>1938</option>
    <option value=1939>1939</option>
    <option value=1940>1940</option>
    <option value=1941>1941</option>
    <option value=1942>1942</option>
    <option value=1943>1943</option>
    <option value=1944>1944</option>
    <option value=1945>1945</option>
    <option value=1946>1946</option>
    <option value=1947>1947</option>
    <option value=1948>1948</option>
    <option value=1949>1949</option>
    <option value=1950>1950</option>
    <option value=1951>1951</option>
    <option value=1952>1952</option>
    <option value=1953>1953</option>
    <option value=1954>1954</option>
    <option value=1955>1955</option>
    <option value=1956>1956</option>
    <option value=1957>1957</option>
    <option value=1958>1958</option>
    <option value=1959>1959</option>
    <option value=1960>1960</option>
    <option value=1961>1961</option>
    <option value=1962>1962</option>
    <option value=1963>1963</option>
    <option value=1964>1964</option>
    <option value=1965>1965</option>
    <option value=1966>1966</option>
    <option value=1967>1967</option>
    <option value=1968>1968</option>
    <option value=1969>1969</option>
    <option value=1970>1970</option>
    <option value=1971>1971</option>
    <option value=1972>1972</option>
    <option value=1973>1973</option>
    <option value=1974>1974</option>
    <option value=1975>1975</option>
    <option value=1976>1976</option>
    <option value=1977>1977</option>
    <option value=1978>1978</option>
    <option value=1979>1979</option>
    <option value=1980>1980</option>
    <option value=1981>1981</option>
    <option value=1982>1982</option>
    <option value=1983>1983</option>
    <option value=1984>1984</option>
    <option value=1985>1985</option>
    <option value=1986>1986</option>
    <option value=1987>1987</option>
    <option value=1988>1988</option>
    <option value=1989>1989</option>
    <option value=1990>1990</option>
    <option value=1991>1991</option>
    <option value=1992>1992</option>
    <option value=1993>1993</option>
    <option value=1994>1994</option>
    <option value=1995>1995</option>
    <option value=1996>1996</option>
    <option value=1997>1997</option>
    <option value=1998>1998</option>
    <option value=1999>1999</option>
    <option value=2000>2000</option>
    <option value=2001>2001</option>
    <option value=2002>2002</option>
    <option value=2003>2003</option>
    <option value=2004>2004</option>
    <option value=2005>2005</option>
    <option value=2006>2006</option>
    <option value=2007>2007</option>
    <option value=2008>2008</option>
    <option value=2009>2009</option>
    <option value=2010>2010</option>
    <option value=2011>2011</option>
    <option value=2012>2012</option>
    <option value=2013>2013</option>
    <option value=2014>2014</option>
</select></td><td id="red">*</td>
</tr>
<tr><td height="29"></td></tr>
<tr>
  <td></td><td><div id="Bsubmit">
    <input type="submit" name="scheck" value="Sign Up" /></div>
</td></tr>
<tr> <td> </td><td style="font-size:20px; color:#9F6;">  Fields marked with * are compulsory</td></tr>
</form>
</table>

<!-- Footer -->
<?php include "footer.html";?>

</body>
</html>
<?php
/* need to add session
connect with database [done]
give it cookies
use the birthdate [done]
if possible then GUI pop ups*/
if(isset($_REQUEST['scheck']))
{
	$name=$_REQUEST['name'];
	$date=$_REQUEST['Date'];
	$month=$_REQUEST['Month'];
	$year=$_REQUEST['Year'];
	$usr=$_REQUEST['usr'];
	$pwd=$_REQUEST['pwd'];
	$cpwd=$_REQUEST['rpwd'];
	$email=$_REQUEST['email'];
    $npattern="/^[(a-z)(0-9).-_]+@[(a-z)(0-9)]+\.[(a-z)]{2,5}$/";
	
	$check=mysql_query("select count(*) as numrows from users where USERNAME='$usr'") ;
	$numrows = mysql_result($check, 0, 'numrows');
	
	$check2=mysql_query("select count(*) as mailrows from users where Email='$email'") ;
	$mailrows=mysql_result($check2, 0, 'mailrows');
	
if(empty($name)||empty($usr)||empty($pwd)||empty($cpwd)||empty($email)||$date=="Date"||$month=="Month"||$year=="Year")
{
	echo "<script type='text/javascript'>alert('Please fill in the details');</script>";
	//echo"please fill in the details";
}
else if((strlen($name)<2)||strlen($name)>30)
{echo "<script type='text/javascript'>alert('Please enter a valid Name');</script>";}
/*else if(!(is_numeric($age))||($age<15))
{echo " please enter valid age";
}*/
else if($numrows>0)
{echo "<script type='text/javascript'>alert('The Username already exists please choose a different Username');</script>";}
else if($mailrows>0)
{echo "<script type='text/javascript'>alert('$email already exists if you have forgot your password then go to login page and click on FORGOT PASSWORD'); </script>";}

else if (!preg_match($npattern,$email))
{echo"<script type='text/javascript'>alert('Please Enter a valid Email Address');</script>";
}
else if(strlen($pwd)<6)
{
echo "<script type='text/javascript'>alert('Password must be of at least 6 characters');</script>";}
else if($pwd!=$cpwd)
{echo "<script type='text/javascript'>alert('Passwords do not match);</script>";}
//-----------------------------------------------------------------------------//


else{
	$hashpwd=md5($pwd);
	$birth2=$year."-".$month."-".$date;
	$sql="INSERT INTO users (`Name`, `Username`, `Email`, `Password`, `birthdate`, `Created On`, `Updated On`) VALUES ('$name', '$usr', '$email', '$hashpwd', '$birth2', NOW(), NOW())";
	mysql_query($sql) or die(mysql_error());
	
	
mkdir("profile/".$usr);
chdir("profile/".$usr);
//echo getcwd();
$prof="profile_pics";
$cov="cover_pics";
$track="track&albums";
$playlist="playlist";
mkdir($prof);
mkdir($cov);
mkdir($track);
chdir($track);
mkdir($playlist);
closedir($track);
closedir($usr);
echo "<script type='text/javascript'>alert('Registration successful');</script>";
}}
?>
