<?php
session_start();

?>
<html>
  <head>
  <title>Homies</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />
<meta name="keywords" content="footer, contact, form, icons" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'

<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
    <style>

 body {
	border: 0;
	font-family: inherit;
	font-size: 100%;
	font-style: inherit;
	font-weight: inherit;
	margin: 0;
	outline: 0;
	padding: 0;
	vertical-align: baseline;
}
html {
	font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
	overflow-y: scroll; /* Keeps page centred in all browsers regardless of content height */
	-webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
	-ms-text-size-adjust: 100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
}

ul.topnav {
    list-style-type: none;
    
	margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

/* Float the list items side by side */
ul.topnav li {float: left;}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 20px 50px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 20px;
}

/* Change background color of links on hover */
ul.topnav li a:hover {background-color: white;
color:black;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}

 #map {
        height: 50%;
		width:70%;
      }
     
a {
  color: #c20;
  text-decoration: underline;
}

.centered {
  margin: 0 auto;
}

.finer-print {
  font-size: 15px;
}

.span2 {
  width: 40%;
  padding: 0;
  float: left;
}





.ytr{
width:700px;
margin-left:20%;
margin-top:3%;
}

.mdl-card + .mdl-card {
  margin-top: 30px;
}

.mdl-card--horizontal {
  flex-direction: column;
  height: 1vh;
  /* 1 */
  padding-left: 150px;
  width: 100%;
  height:250px;
}
.mdl-card--horizontal .mdl-card__media {
  left: 0;
  position: absolute;
height:250px;
  width: 150px;
  
}
.mdl-card--horizontal .mdl-card__supporting-text {
  flex: 1 1 auto;
  width: auto;
}

.mdl-card--horizontal-2 {
  flex-direction: column;
  flex-wrap: wrap;
  min-height: 0px;
}
.mdl-card--horizontal-2 .mdl-card__title {

  flex: 1 auto;
  float: center;
  position:auto;
  margin-left:20px;
}
.mdl-card--horizontal-2 .mdl-card__title-text {

  
}
.mdl-card--horizontal-2 .mdl-card__media {
  flex: 5 auto;
  float: right;
  height: 112px;
  margin: 16px 16px 0 0;
  width: 212px;
}
.mdl-card--horizontal-2 .mdl-card__actions {
  clear: both;
  flex: 1 auto;
}

.footer-distributed{
	background-color: #000000;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	font: bold 16px sans-serif;
	text-align: left;

	padding: 50px 60px 40px;
	margin-top: 80px;
	overflow: hidden;
}
/* Footer left */

.footer-distributed .footer-left{
	float: left;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0 0 10px;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 0 0 10px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
	font-size:18px;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer social icons */

.footer-distributed .footer-icons{
	margin-top: 40px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Footer Right */

.footer-distributed .footer-right{
	float: right;
}

.footer-distributed .footer-right p{
	display: inline-block;
	vertical-align: top;
	margin: 15px 42px 0 0;
	color: #ffffff;
}

/* The contact form */

.footer-distributed form{
	display: inline-block;
}

.footer-distributed form input,
.footer-distributed form textarea{
	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #1f2022;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;

	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 400px;
	padding: 18px;
}

.footer-distributed ::-webkit-input-placeholder {
	color:  #5c666b;
}

.footer-distributed ::-moz-placeholder {
	color:  #5c666b;
	opacity: 1;
}

.footer-distributed :-ms-input-placeholder{
	color:  #5c666b;
}


.footer-distributed form input{
	height: 55px;
	margin-bottom: 15px;
}

.footer-distributed form textarea{
	height: 100px;
	margin-bottom: 20px;
}

.footer-distributed form button{
	border-radius: 3px;
	background-color:  #33383b;
	color: #ffffff;
	border: 0;
	padding: 15px 50px;
	font-weight: bold;
	float: right;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 1000px) {

	.footer-distributed {
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-company-name{
		font-size: 12px;
	}

	.footer-distributed form input,
	.footer-distributed form textarea{
		width: 250px;
	}

	.footer-distributed form button{
		padding: 10px 35px;
	}

}

@media (max-width: 800px) {

	.footer-distributed{
		padding: 30px;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-right{
		float: none;
		max-width: 300px;
		margin: 0 auto;
	}

	.footer-distributed .footer-left{
		margin-bottom: 40px;
	}

	.footer-distributed form{
		margin-top: 30px;
	}

	.footer-distributed form{
		display: block;
	}

	.footer-distributed form button{
		float: none;
	}
}
    </style>
  </head>
  <body>
    <div>

<ul class="topnav" id="myTopnav">
  <li><a href="main.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="contact.php">Contact</a></li>
        <?php  
		if(isset($_SESSION['email']))
					{
						
			echo'<li><a href="profile.php">'.$_SESSION['fname'].'</a></li><li><a href="logout.php">logout</a></li>';
					}
					else
					{
						echo'<li><a href="signup.php">LogIn</a></li>';
					}
			
			
			?>
		
</ul>
</div>
<?php 
function get_con()
{
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
die("database connection failed".mysqli_error());
}
$db=mysqli_select_db($conn,'home');
if(!$db)
{
die("database selection failed".mysqli_error());
}
if(!isset($_POST['city']))
{
	$URL="hostel.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
$add=$_POST['city'];
$token = strtok($add, " ");
$tok=rtrim($token,",");
$tok=strtolower($tok);
$sex=$_POST['sex'];

$query=mysqli_query($conn,"select id,h_name,t_n_floor,r_1s,r_2s,r_3s,locality from hostel where city='$tok' AND sex='$sex'");
$products=array();

while($rows=mysqli_fetch_object($query)){
$products[]=$rows;	

}
if(!$products)
{
	echo '<font size="40"color="red"><b>'."Sorry no hostel's room <br><br>are available".'</b></font><hr color="white">';
	echo '<font size="5%"color="3b5998"><b>"Please Keep Visiting"</b></font><br><br><br><br><br>';
}
return $products;
}
function do_con()
{
	$table='';
	$products=get_con();
	foreach($products as $product)
	{
		$table.='<div class="mdl-card mdl-shadow--2dp mdl-card--horizontal">
  <div class="mdl-card__media">
    <img src="http://placehold.it/150x200/DC143C/FFFFFF" alt="img">
  </div>
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">'.$product->h_name.'</h2>
    </div>
    <div class="mdl-card__supporting-text">
      This is a  <b>'.$product->t_n_floor.' </b> . floor hostel .The monthly charges are in the range <b>'.$product->r_3s.'</b> to<b>'.$product->r_1s.'</b> .<br> This hostel is in  <b><i> '.$product->locality.'</b></i>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple" href="hostelinfo.php?id='.$product->id.'" >Get More Info</a>
    </div>
    <div class="mdl-card__menu">
      <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple"><i class="material-icons">share</i></button>
    </div>
</div>';
	}
return $table;
mysqli_close($con);	
}
	
?>
<br>
<br>
<br>
<div class="ytr">
<?php echo do_con();?>
		</div>
	  <tr>
	  <td>
	  
	  </td>
	  
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Homies<span></span></h3>

				<p class="footer-links">
					<a href="main.php">Home</a>					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="contact.php">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Homies &copy; 2017</p>

				<div class="footer-icons">

					<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" />
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>

  </body>
</html>