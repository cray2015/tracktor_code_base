<?php
//testing of settings drop down 
session_start();
include_once "dbconnect.php";
$usr=$_SESSION['session_user'];
$userid=$_SESSION['user_id'];
?>
<?php $result=mysql_query("select count(*) as songvalue from songs where id='$userid'");
$numrows = mysql_result($result, 0, 'songvalue');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor: Upload</title>
<link type="text/css" rel="stylesheet" href="loginsheet.css" />

<link rel="stylesheet" type="text/css" href="soundmanger/360-player/360player.css" />
<link rel="stylesheet" type="text/css" href="soundmanger/360-player/360player-visualization.css" />
<script type="text/javascript" src="soundmanger/360-player/script/berniecode-animator.js"></script>
<script type="text/javascript" src="soundmanger/script/soundmanager2.js"></script>
<script type="text/javascript" src="soundmanger/360-player/script/360player.js"></script>
<link type="text/css" rel="stylesheet" href="drop.css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="test.css" />
</head>
<body>
<!-- Header -->
<?php include "header.html";?>

 <span id="seperate">
 	<span id="photo" >
    <table border="1"><tr><td>
    <?php if(isset($_REQUEST['prof'])){move_uploaded_file($_FILES["file"]["tmp_name"],"profile/".$usr."/profile_pics/".$_FILES['file']['name']);
$loc="http://localhost/again/profile/".$usr."/profile_pics/".$_FILES['file']['name'];?>

<img id="profile_photo" src=<?php echo $loc;?>  />
<?php }?>

<a href="#login_form" id="login_pop"><img id="change_icon" src="edit-icon.png" alt="change pic" width=25 height=25/>  Edit Profile Picture</a></td></tr></table> 
    

<!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Change Profile Picture</h2>
            <div>
				<form  method="POST" action="" enctype="multipart/form-data">
<input type="file" name="file"  />
 <input  type="submit" name="prof" value="Upload" />
</form>
             </div>
             <a class="close" href="#close"></a>
        </div>
    </span>
  </span>
  
 <!--Songs part-->
<table class="left song_table" border="0">
<!--<div class="sm2-inline-list"> <!-- remove this class to have one item per line -->
<?php if ($numrows>0)
{$sql=mysql_query("select * from songs where id='$userid'");
while($newresult=mysql_fetch_assoc($sql))
{
	$songid2=$newresult['Songid'];
	
	?><tr><td>
<div class="ui360 ui360-vis" ><a href="<?php echo $newresult['location'];?>"><?php echo $newresult['songname'];?></a>

<span class="like"><button type="button" name="like"><img src="like.png" width="25px" height="25px"/></button></span>

    <a href="#comment" >Comment</a>
    <a href="#x" class="overlay" id="comment"></a>
            <div class="popup">
                <h2>Comment</h2>
                <div>
                    <form  method="POST" action="" >
    <input type="text" name="comment_data"  />
     <input  type="submit" name="comment" value="Comment" />
    </form>
                 </div>
                 <a class="close" href="#close"></a>
            </div>
 </div></td></tr>
<?php if(isset($_REQUEST['comment']))
{
	$comment=$_REQUEST['comment_data'];
	$sql_2=mysql_query("insert into comments(`id`,`songid`,`comments`) values('$userid','$songid2','$comment')") or die(mysql_error());
} }} else
{
	?>No records founds: please upload some tracks<?php }
	?>
<div class="clearfooter"></div>

<!-- Footer -->
<?php include "footer.html";?>
</body>
</html>