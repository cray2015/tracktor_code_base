<!-- watch for jplayer circle skin-->
<?php 
session_start();
include_once "dbconnect.php";
$usr=$_SESSION['session_user'];
if(empty($usr))
{$_SESSION['msg']=1;
	header('location:login.php');}
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor: Explore</title>

<link type="text/css" rel="stylesheet" href="loginsheet.css" />
<link rel="stylesheet" type="text/css" href="soundmanger/360-player/360player.css" />
<link rel="stylesheet" type="text/css" href="soundmanger/360-player/360player-visualization.css" />
<script type="text/javascript" src="soundmanger/360-player/script/berniecode-animator.js"></script>
<script type="text/javascript" src="soundmanger/script/soundmanager2.js"></script>
<script type="text/javascript" src="soundmanger/360-player/script/360player.js"></script>
<link type="text/css" rel="stylesheet" href="drop.css" />


<script type="text/javascript">

soundManager.setup({flashVersion:12},{
  // path to directory containing SM2 SWF
  url: 'soundmanger/swf/soundmanager2.swf'
});/*
threeSixtyPlayer.config = {

  playNext: false,
  autoPlay: false,
  allowMultiple: false,
  loadRingColor: '#ccc',
  playRingColor: '#64CD82',
  backgroundRingColor: '#eee',
  circleDiameter: 256,
  circleRadius: 128,
  animDuration: 500,
  animTransition: Animator.tx.bouncy,
  showHMSTime: true,

  useWaveformData: true,
  waveformDataColor: '#0099ff',
  waveformDataDownsample: 3,
  waveformDataOutside: false,
  waveformDataConstrain: false,
  waveformDataLineRatio: 0.64,

  useEQData: true,
  eqDataColor: '#339933',
  eqDataDownsample: 4,
  eqDataOutside: true,
  eqDataLineRatio: 0.54,

  usePeakData: true,
  peakDataColor: '#ff33ff',
  peakDataOutside: true,
  peakDataLineRatio: 0.5,

  useAmplifier: true

} */
/*
threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
threeSixtyPlayer.config.showHMSTime = true;

// enable some spectrum stuffs

threeSixtyPlayer.config.useWaveformData = true;
threeSixtyPlayer.config.useEQData = true;

// enable this in SM2 as well, as needed

if (threeSixtyPlayer.config.useWaveformData) {
  soundManager.flash9Options.useWaveformData = true;
}
if (threeSixtyPlayer.config.useEQData) {
  soundManager.flash9Options.useEQData = true;
}
if (threeSixtyPlayer.config.usePeakData) {
  soundManager.flash9Options.usePeakData = true;
}

if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
  // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
  soundManager.preferFlash = true;
}

// favicon is expensive CPU-wise, but can be used.
if (window.location.href.match(/hifi/i)) {
  threeSixtyPlayer.config.useFavIcon = true;
}

if (window.location.href.match(/html5/i)) {
  // for testing IE 9, etc.
  soundManager.useHTML5Audio = true;
}

*/
</script>

</head>
<body>

<!-- Header -->
<?php include "header.html";?>

<div id="welcome">
Welcome <a href="profile.php"><?php echo $usr; ?></a></div>

<div class="ui360 ui360-vis"><a href="Martin.mp3">Martin</a></div>

<!-- Footer -->
<?php include "footer.html";?>
</body>
</html>
<?php
//id3_get_tag();
//print_r($tag);


$userid=$_SESSION['user_id'];
$sql=mysql_query("select songname from songs where id='$userid' ");
while($result=mysql_fetch_assoc($sql))
{echo "<br>";
	print_r($result['songname']);
	echo "</br>";}


?>
