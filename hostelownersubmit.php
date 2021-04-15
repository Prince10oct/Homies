<?php
session_start();
$msg="";
$email="";

if(isset($_POST['h_name']))
{
	if(isset($_SESSION['email']))
	{
		$email=$_SESSION['email'];
	}
	else{
		$email="";
	}
$user='first';
$pass='0103it141095';
$db='homies';
$con=mysqli_connect('localhost',$user,$pass);
if(!$con)
{
	echo'Server maintainance wait for 15 minutes';
}

if(!mysqli_select_db($con,'home'))
{
	echo'not database';
}
$h_name=$_POST['h_name'];
$city=$_POST['city'];
$locality=$_POST['locality'];
$c_no=$_POST['c_no'];
$sex=$_POST['sex'];
$t_n_floor=$_POST['t_n_floor'];
$t_n_r_1s=$_POST['t_n_r_1s'];
$t_n_r_2s=$_POST['t_n_r_2s'];
$t_n_r_3s=$_POST['t_n_r_3s'];
$t_n_e_r_1s=$_POST['t_n_e_r_1s'];
$t_n_e_r_2s=$_POST['t_n_e_r_2s'];
$t_n_e_r_3s=$_POST['t_n_e_r_3s'];
$r_1s=$_POST['r_1s'];
$r_2s=$_POST['r_2s'];
$r_3s=$_POST['r_3s'];
 //SQL Injection defence!
 if(!isset($_FILES['inputFile']['tmp_name']))
 {
	 $inputFile=null;
 }
 else{
	 $inputFile=($_FILES['inputFile']['tmp_name']);
$inputFile=file_get_contents($inputFile);
$inputFile=base64_encode($inputFile);
}
if(!isset($_FILES['inputFile1']['tmp_name1']))
 {
	 $inputFile1=null;
 }
 else{
	 $inputFile1=($_FILES['inputFile']['tmp_name1']);
$inputFile1=file_get_contents($inputFile1);
$inputFile1=base64_encode($inputFile1);
}
if(!isset($_FILES['inputFile21']['tmp_name21']))
 {
	 $inputFile21=null;
 }
 else{
	 $inputFile21=($_FILES['inputFile21']['tmp_name21']);
$inputFile21=file_get_contents($inputFile21);
$inputFile21=base64_encode($inputFile21);
}
if(!isset($_FILES['inputFile22']['tmp_name22']))
 {
	 $inputFile22=null;
 }
 else{
	 $inputFile22=($_FILES['inputFile22']['tmp_name22']);
$inputFile22=file_get_contents($inputFile22);
$inputFile22=base64_encode($inputFile22);
}
if(!isset($_FILES['inputFile31']['tmp_name31']))
 {
	 $inputFile31=null;
 }
 else{
	 $inputFile31=($_FILES['inputFile31']['tmp_name31']);
$inputFile31=file_get_contents($inputFile31);
$inputFile31=base64_encode($inputFile31);
}
if(!isset($_FILES['inputFile32']['tmp_name32']))
 {
	 $inputFile32=null;
 }
 else{
	 $inputFile32=($_FILES['inputFile32']['tmp_name32']);
$inputFile32=file_get_contents($inputFile32);
$inputFile32=base64_encode($inputFile32);
}
if(!isset($_FILES['inputFile4']['tmp_name4']))
 {
	 $inputFile4=null;
 }
 else{
	 $inputFile4=($_FILES['inputFile4']['tmp_name4']);
$inputFile4=file_get_contents($inputFile4);
$inputFile4=base64_encode($inputFile4);
}
$lat=$_POST['lat'];
$lng=$_POST['lng'];

$sql="INSERT INTO hostel (h_name,city,locality,c_no,sex,t_n_floor,t_n_r_1s,t_n_r_2s,t_n_r_3s,t_n_e_r_1s,t_n_e_r_2s,t_n_e_r_3s,r_1s,r_2s,r_3s,inputfile,inputfile1,inputfile21,inputfile22,inputfile31,inputfile32,inputfile4,lat,lng,email) VALUES('$h_name','$city','$locality','$c_no','$sex','$t_n_floor','$t_n_r_1s','$t_n_r_2s','$t_n_r_3s','$t_n_e_r_1s','$t_n_e_r_2s','$t_n_e_r_3s','$r_1s','$r_2s','$r_3s','$inputFile','$inputFile1','$inputFile21','$inputFile22','$inputFile31','$inputFile32','$inputFile4','$lat','$lng','$email')";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo mysqli_error($con);
}
else
{
	$msg='thankyou very much ..!!!stay updated ';
	
	
}
mysqli_close($con);
}
else{
header("refresh:0;url=main.php");
}
?>


<html>
<head>
<title>Thank you...</title><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />

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
.parallax {
    /* The image used */
    background-image: url('wallpaper.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button3 {

    background-color: #4CAF50;
    color: white;
    padding: 30px 50px;
    margin:3px 1200px;
    border: #4CAF50;
    cursor: pointer;
    width: 250px;
	height:10px;
	top:100px;
	left:100px;
}



.button4 {
  height: 44px;
  border: none;
}

  
#email {
  width: 75%;
  background: #FDFCFB;
  font-family: inherit;
  color: #737373;
  letter-spacing: 1px;
  text-indent: 5%;
  border-radius: 5px 0 0 5px;
}


#submit {
  width: 25%;
  height: 46px;
  background: #E86C8D;
  font-family: inherit;
  font-weight: bold;
  color: inherit;
  letter-spacing: 1px;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  transition: background .3s ease-in-out;
}
  

#submit:hover {
  background: #d45d7d;
}
  

input:focus {
  outline: none;
  outline: 2px solid #E86C8D;
  box-shadow: 0 0 2px #E86C8D;
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
<script src="ism-2.2.min.js"></script>
</head>
<body background-color="black">
<div class="parallax">
<div>
<ul class="topnav" id="myTopnav">
  <li><a href="main.php">Home</a></li>
  <li><a href="#news">News</a></li>
 
  <li><a href="contact.php">Contact</a></li>
   <?php  if(isset($_SESSION['email']))
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
<h4><?php echo$msg;?></h4>
</div>	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Homies<span></span></h3>

				<p class="footer-links">
					<a href="main.php">Home</a>
					·
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
