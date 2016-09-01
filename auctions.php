<?php 
require_once 'library/config.php';
require_once 'library/functions.php';
$id = (int)$_GET['a'];
$aucData = auctionPropertiesById($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Auction system Properties</title>
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/menu.css" type="text/css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/print.css" type="text/css" media="print">
<!--<script language="javascript" src="<?php echo WEB_ROOT; ?>javascript/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
<script language="javascript" src="<?php echo WEB_ROOT; ?>javascript/jquery.bxSlider.js"></script>
<script language="javascript" src="<?php echo WEB_ROOT; ?>javascript/jcarousellite_1.0.1.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>  
<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<style>
body{ margin-top:10px; background:#ffffff url(<?php echo WEB_ROOT; ?>images/bg-body.jpg) repeat-x; }
#auctionBox { padding:20px; font-size:12px;}
#auctionBox b { text-decoration:underline; }
#auctionBox .title { text-align:left; font-size:18px; font-weight:bold; padding:5px; padding-bottom:15px; color:#FF3300; }
#green { color:#00FF00; font-size:16px; font-weight:bold;}
#red { color:#FF0000 font-size:16px; font-weight:bold;}
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
});
function check_empty() {
			$('#email_error').hide();
			var form = $( "#bid_form" );
			var email = $( "#email" ).val();
			form.validate();
			if (form.valid()) {
				$.ajax({
							type: "POST",
							url: "<?php echo WEB_ROOT; ?>" + "save_auction.php",
							dataType: 'json',
							data: {
								ajax_mail: email,
								id : <?php echo $id; ?>
								},
							success: function(res) {
								if(res == 0)
								{
									form.submit();
								}
								else
									$('#email_error').show();
							}
							});
			}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
</script>
<style type="text/css">
    
     @import "http://fonts.googleapis.com/css?family=Raleway";
	  .form-download1 {
	text-align:centre;
	border: 0px solid #232323;
		  margin: auto;
         width: 50%;
	  }
	  .form-download1 input[type="text"] {
        font-size: 16px;
        height: 40px;
		 width:25%;
		 float:left;
			
      }
	 .order{
		 margin: auto;
         width: 50%;
	 }
#type{
		   padding: 9px 10px;
	   float:left;
}
#abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
form {
max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
input {
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#name {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#tel {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#email {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}
#bid {
background-image:url(../images/msg.png);
background-repeat:no-repeat;
background-position:5px 7px;


margin-bottom:30px
}
#submit_btn {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}
span {
color:red;
font-weight:700
}
button {
width:10%;
height:45px;
border-radius:3px;
background-color:#cd853f;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px;
cursor:pointer
}
    </style>
</head>

<body id="body" ">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="<?php echo WEB_ROOT; ?>save_auction.php" id="bid_form" method="post" name="bid_form">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>Place your Bid now</h2>
<hr>
<input id="auction_id" name="auction_id" type="hidden" value="<?php echo $id; ?>">
<input id="name" name="name" placeholder="Name" type="text" required>
<input id="tel" name="tel" placeholder="Phone Number" type="tel" minlength="11" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required> 
<input id="email" name="email" placeholder="Email" type="email" required>
<label id="email_error" for="email" style="display:none;color:red;font-size:16px">Email Already used</label>
<input id="bid" name="bid" placeholder="Your Bid" type="number"  maxlength="11" required>
<input type="button" id= "submit_btn" value="submit" onclick="check_empty()">
<!--<a href="javascript:%20check_empty()" id="submit">Submit</a>-->
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<div class="container">
	<div id="header" class="span-24">
		<img src="<?php echo WEB_ROOT; ?>images/logo.jpg" />
    </div>
 <?php include('menu.php');?>
   
  <div id="sidebar-1" class="span-5 border">
  	<?php include('left.php');?>
	
    </div>
  <div id="content" class="span-13 border">

<div class="span-13">
<?php 
if(isset($aucData)){
extract($aucData[0]);
?>
<div id="auctionBox">
<h3 class="title"><?php echo $a_pro_name; ?></h3>
<img src="<?php echo  $p_image; ?>" class="left" title="<?php echo $a_pro_name; ?>"  alt="<?php echo $a_pro_name; ?>"/>
<br/><br/><b>Property Address :</b><br/>&nbsp;<?php echo $pro_address; ?>
<br/><br/><b>Bid starts at:</b>&nbsp;&nbsp;<?php echo $res_price; ?>&nbsp;Rs.
<br/><br/><b>Bank Name :</b>&nbsp;&nbsp;<a href="<?php echo $bank_url; ?>"><?php echo $bank_name; ?></a>
<br/><br/><b>City Name :</b>&nbsp;&nbsp;<a href="<?php echo $city_url; ?>"><?php echo $city_name; ?></a>
<br/><br/><b>Property Category :</b>&nbsp;&nbsp;<a href="<?php echo $cat_url; ?>"><?php echo $cat_name; ?></a>
<br/><br/><b>Property Status :</b>&nbsp;&nbsp;<span id="<?php echo $statClass; ?>"><?php echo  strtoupper( $p_status); ?></span>
<div class="order">
		
		<button class="form-download1" method="get" id="popup" onclick="div_show()">Bid Here</button>
</div>
</div>
<?php 
}//if
?>

		

</div><!-- span-13 -->


</div>

<div class="span-6 last">
<?php include('slider.php'); ?>
<hr/>
<?php include('footer.php'); ?>
  
</div>

</body>
</html>