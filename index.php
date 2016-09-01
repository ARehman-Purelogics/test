<?php 
require_once 'library/config.php';
require_once 'library/functions.php';
$cityList = getAuctionPropertiesById('x',2,32);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Auction System </title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
<script language="javascript" src="javascript/jquery.min.js"></script>
<script language="javascript" src="javascript/jquery.bxSlider.js"></script>
<script language="javascript" src="javascript/jcarousellite_1.0.1.js"></script>    
<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<style>
body{ 
	margin-top:10px; 
    background: #FFFFFF; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#FFFFFF, #87CEEB); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#FFFFFF, #87CEEB); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#FFFFFF, #87CEEB); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#FFFFFF, #87CEEB); /* Standard syntax */
 }
</style>
<script type="text/javascript">
	$(document).ready(function(){
        $(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
	$('div#listBox').hover(
			function(){
				$(this).addClass('mouseHover');
			},
			function(){
				$(this).removeClass('mouseHover');
			}
	);//hover
});
</script>
<style>
</style>
</head>

<body>

<div class="container">
	<div id="header" class="span-24">
		<img src="images/logo.gif" />
    </div>
 <?php include('menu.php');?>
   
  <div id="sidebar-1" class="span-5 border">
  	<?php include('left.php');?>
	
    </div>
<div id="content" class="span-13 border">
	<?php include('list.php'); ?>
</div>
<div class="span-6 last">
	<?php include('slider.php'); ?>
<hr/>

<?php include('footer.php'); ?>
</div>
</body>
</html>