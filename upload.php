<?php 
session_start();
include_once "dbconnect.php";
$usr=$_SESSION['session_user'];
$userid=$_SESSION['user_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor: Upload</title>
<link type="text/css" rel="stylesheet" href="loginsheet.css" />
<link type="text/css" rel="stylesheet" href="drop.css" />
</head>


<body>
<!-- Header -->
<?php include "header.html";?>

<div id="welcome">
      Welcome <a href="profile.php"><?php echo $usr; ?></a>
      </div>
      <h1> Upload your files</h1>
      
    <div id="uptab">
  <table border="0"  height="250px" >  
  <tr><td>
<form  method="POST" action="" enctype="multipart/form-data">
<input style="width:200px;" type="file" name="file"  />
 <strong><input id="upload_but" type="submit" name="scheck" value="Upload" /></strong>
<br />or want to <a href="Explore.php"><b> Explore</b></a>
<br  />*use only mp3 files to upload
</form>
</td></tr>
</table>
</div>

<!-- Footer -->
<?php include "footer.html";?>

</body>
</html>

<?php


if(isset($_REQUEST['scheck']))
{
	if($_FILES["file"]["name"]=="")
	{echo "<script type='text/javascript'>alert('Select file to upload: no files selected');</script>";
	}
	else if ($_FILES["file"]["error"] > 0)
      {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
     }
	 else{

 move_uploaded_file($_FILES["file"]["tmp_name"],"profile/".$usr."/track&albums/".$_FILES['file']['name']);
 $loc="http://localhost/again/profile/".$usr."/track&albums/".$_FILES['file']['name'];
 
 $sql="INSERT INTO songs (`id`, `songname`, `location`, `upload_date`) VALUES ('$userid', '{$_FILES['file']['name']}', '$loc', Now()) " ;
	mysql_query($sql) or die(mysql_error());
	 }/*
	 
if( $_FILES['uploadfile']['name'] != "" )
{
   copy( $_FILES['uploadfile']['name'], "/upload" ) or 
           die( "Could not copy file!");
}
else
{
    die("No file specified!");
}*/}
?>

