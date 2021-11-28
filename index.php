<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tracktor</title>
<link type="text/css" rel="stylesheet" href="loginsheet.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, Bootstrap Carousel, HTML5 Slideshow" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>

<body>
<div id="header">
	    	<ul>
        <li><div id="left"><img id="logo" src="logo3.jpg" width="78" height="39" /></div></li>
        <li><span id="explore">
       <form action="explore.php" method="get">
       <input type="submit" value="Explore" name="e_submit" />
       </form></span></li>
        <li><span id="search">
      <form  method="get" action="">
        <input style="height:30px; width:70px; " type="submit" name="submit" value="Search" />
        <input style="height:20px; width:150px;" type="text" name="sfield" /> 
        </form></span>
        </li>
    	
            
      </ul>
              
  </div>
</div>
<!-- Start WOWSlider.com BODY section -->
<div id="left">
	<div id="wowslider-container1" >
	<div class="ws_images"><ul>
<li><img src="data1/images/img1415.jpg" alt="IMG1415" title="IMG1415" id="wows1_0"/></li>
<li><img src="data1/images/img1416.jpg" alt="IMG1416" title="IMG1416" id="wows1_1"/></li>
<li><img src="data1/images/img1417.jpg" alt="IMG1417" title="IMG1417" id="wows1_2"/></li>
<li><img src="data1/images/img1418.jpg" alt="IMG1418" title="IMG1418" id="wows1_3"/></li>
<li><img src="data1/images/img1419.jpg" alt="IMG1419" title="IMG1419" id="wows1_4"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="IMG1415"><img src="data1/tooltips/img1415.jpg" alt="IMG1415"/>1</a>
<a href="#" title="IMG1416"><img src="data1/tooltips/img1416.jpg" alt="IMG1416"/>2</a>
<a href="#" title="IMG1417"><img src="data1/tooltips/img1417.jpg" alt="IMG1417"/>3</a>
<a href="#" title="IMG1418"><img src="data1/tooltips/img1418.jpg" alt="IMG1418"/>4</a>
<a href="#" title="IMG1419"><img src="data1/tooltips/img1419.jpg" alt="IMG1419"/>5</a>
</div></div>
<span class="wsl"><a href="http://wowslider.com">Wordpress Slideshow</a> by WOWSlider.com v5.2</span>
	<div class="ws_shadow"></div>
	</div></div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <a id="right" href="signup.php"><img src="signup.png" width="100" /></a><div id="right" style=" font-size:24px">/</div><a id="right" href="login.php"><img style="padding-top:5px" src="login.png" width="76" height="20" /></a>
	<!-- End WOWSlider.com BODY section -->

<!-- Footer -->
<?php include "footer.html";?>
</body>
</html>
