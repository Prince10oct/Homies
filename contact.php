<?php
session_start();

?>

<html>
<head>
<title>Homies</title><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />
<meta name="keywords" content="footer, contact, form, icons" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
  
h4{
font-size:2em;
}
h2{
font-size:1.5em;}
input:focus {
  outline: none;
  outline: 2px solid #E86C8D;
  box-shadow: 0 0 2px #E86C8D;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width:20%;
    border-radius: 5px;
    background-color:;    
   margin-left:330px;
   margin-top:80px;
	}

.card:hover {
    box-shadow: 30px 20px 20px 20px rgba(0,0,0,0.2);
}

img {
    border-radius: 10px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
.card1 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
    border-radius: 5px;
   margin-left:750px;
   margin-top:-400px;
	}

.card1:hover {
    box-shadow: 30px 20px 20px 20px rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container1 {
    padding: 2px 0px;
}
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Oswald:400);

main {
  width: 50rem;
  margin: 10rem auto;
  background: rgba(255,255,255,0.8);
  border-radius: 0.2rem;
  padding: 1rem;
  color: #333;
}
#name {
  font-family: "Oswald", "Arial";
  font-size: 3rem;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 0.1rem;
  margin-bottom: 1.5rem;
}
.info {
  font-family: "Roboto Condensed", "Arial";
  font-size: 2.0rem;
  margin-bottom: 1.8rem;
}
#circle {
  display: block;
  position: relative;
  width: 15rem;
  height: 15rem;
  margin: -9rem auto 0 auto;
  text-align: center;
  overflow: hidden;
  perspective: 1200px;
}
#circle:hover #circle-flip {
  transform: rotateY(180deg);
}
@keyframes flip {
  10% {
    transform: rotateY(180deg);
  }
  90% {
    transform: rotateY(180deg);
  }
}
#circle-flip {
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: all 500ms;
  animation: flip 3s;
  animation-delay: 0.5s;
}
.front, .back, .bottom {
  position: absolute;
  height: 100%;
  width: 100%;
  backface-visibility: hidden;
}
#circle .front {
  background: url("img_avatar.png") #DDD;
  background-size: cover;
  border-radius: 50%;
}
#circle .back {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/106891/email.png") #FFF;
  background-size: 45%;
  background-repeat: no-repeat;
  background-position: center 55%;
  line-height: 7rem;
  color: #666;
  font-family: "Roboto Condensed", "Arial";
  font-size: 1rem;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 0.08rem;
  border-radius: 50%;
  transform: rotateY(180deg);
}
.button-container {
  position: relative;
  perspective: 1200px;
}
.button {
  display: block;
  height: 5rem;
  width: 25rem;
  margin: 0 auto 1.4rem auto;
  transform-style: preserve-3d;
  transform-origin: 50% 25px -25px; 
  transition: all 300ms;
  animation: underflip 3s;
  animation-delay: 4s;
}
.button:hover {
  transform: rotateX(90deg);
}
@keyframes underflip {
  10% {
    transform: rotateX(90deg);
  }
  90% {
    transform: rotateX(90deg);
  }
}
.first.button .front {
  background: url("hostel.png") #BBB;
  background-size: 80%;
  background-repeat: no-repeat;
  background-position: center;
}
.first.button .bottom {
  background: #666;
  white-space: nowrap;
}
.first.button .bottom::after {
  content: "";
  width: 1px;
  height: 100%;
  vertical-align: middle;
  display: inline-block;
  margin-right: -10px;
}
.first.button .bottom span {
  color: #FFF;
  font-family: "Roboto Condensed", "Arial";
  font-size: 0.9rem;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 0.07rem;
  vertical-align: middle;
  display: inline-block;
  white-space: normal;
  padding: 0.3rem;
}
.button .bottom {
  transform: rotateX(-90deg) translateY(25px) translateZ(25px);
}

@media all and (min-width: 1800px), (min-resolution: 192dpi) {
  html {
    font-size: 150%;
  }
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


</style>
<script src="ism-2.2.min.js"></script>
</head>
<body >
<div class="parallax">
<div>
<ul class="topnav" id="myTopnav">
  <li><a href="main.php">Home</a></li>
  <li><a href="#news">News</a></li>
 
  <li><a href="#">Contact</a></li>
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
<main>
  <a href="#" id="circle">
    <div id="circle-flip">
      <div class="front">
        
      </div>
      <div class="back">
        Email Us
      </div>
    </div>
  </a>
  <p id="name">Homies</p>
  <p class="info">We will reply as fast as possible .Its a pleasure for us to work for you .</p>
  <div class="button-container">
    <a class="first button" href="#">
      <div class="front">

      </div>
      <div class="bottom">
        <span>xyz@gmail.com</span>
      </div>
    </a>
  </div>
</main>
<div class="parallax">
<div class="card">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
 
    <h4><b><font color="white">Prince </font></b></h4> 
    <p><h2><font color="white">Prince62yadav@gmail.com</font></b><br><font color="white">
     08962404952</font></h2></b></p>
  </div>
</div>	
<div class="card1">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container1">
     <h4><b><font color="white">Shubham Asati</font></b></h4> 
    <p><h2><font color="white">Shubham.asati2626@gmail.com</font></b><br><font color="white">
     08120387578</font></h2></b></p>	

	 </div>
 
</div>	
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>	<br><br><br><br><br><br><br><br><br><br><br><footer class="footer-distributed">

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

				<p class="footer-company-name">Homies 2017</p>

				<div class="footer-icons">

					<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
					<a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/"><i class="fa fa-github"></i></a>

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