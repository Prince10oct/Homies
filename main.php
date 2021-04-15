<?php
session_start();

?>

<html>

<head>
<title>Homies</title><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>
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

.description {
  font-size: 18px;
  background:#afbdd4;
  font-family: inherit;
  letter-spacing: 1px;
  line-height: 1.4em;
  margin: -2px 0 45px;
}


.input1 {
  display: flex;
  align-items: center;
}

	
.button4 {
  font-family: inherit;
  height: 44px;
  border: none;
}

  
#email {
  width: 75%;
  background: #FDFCFB;
  font-family: inherit;
  color: #3b5998;
  letter-spacing: 1px;
  font-size:18;
  text-indent: 5%;
  border-radius: 5px 0 0 5px;
}


#submit {
  width: 25%;
  height: 46px;
  background: #3b5998;
  font-family: inherit;
  font-weight: bold;
  color: white;
  letter-spacing: 1px;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  transition: background .3s ease-in-out;
}
  

#submit:hover {
  background: #3b5998;
}
  

input:focus {
  outline: none;
  outline: 2.5px solid #3b5998;
  box-shadow: 0 0 2.5px #3b5998;
}
#list8 {  
z-index:1;}
#list8 ul { list-style:none; }
#list8 ul li { font-family:Georgia,serif,Times; font-size:20px; }
#list8 ul li a { display:block; width:700px; height:28px; background-color:#white; border-left:20px solid #3b5998; border-right:20px solid #3b5998; padding-left:10px;
  text-decoration:none; color:#3b5998; }
#list8 ul li a:hover {  -moz-transform:rotate(-5deg); -moz-box-shadow:10px 10px 20px #000000;
  -webkit-transform:rotate(-5deg); -webkit-box-shadow:10px 10px 20px #000000;
  transform:rotate(-5deg); box-shadow:10px 10px 20px #000000; 
  }
.button
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #0C5;

  font-size: 24px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 7em auto;
  
  position: absolute; 
  top:0px; right:0px; bottom:0; left:-50px;
  
  padding: 20px 0;
  width: 220px;
  height:30px;

  background: #0D6;
  border: 1px solid #0D6;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button:hover, .button:active 
{
  text-decoration: none;
  color: #0C5;
  border-color: #0C5;
  background: #FFF;
}

.button span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button:hover span, .button:active span 
{
  padding-right: 30px;
}

.button:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: #0C5;
  right: 0;
  top: 50%;
}
.button1
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #0C5;

  font-size: 24px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 5em auto;
  
  position: absolute; 
  top:260px; right:0px; bottom:0; left:500px;
  
  padding: 20px 0;
  width: 450px;
  height:30px;

  background: #0D6;
  border: 1px solid #0D6;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button1:hover, .button:active 
{
  text-decoration: none;
  color: #0C5;
  border-color: #0C5;
  background: #FFF;
}

.button1 span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button1 span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button1:hover span, .button:active span 
{
  padding-right: 30px;
}

.button1:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: #0C5;
  right: 0;
  top: 50%;
}


.button2
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #0C5;

  font-size: 24px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 5em auto;
  
  position: absolute; 
  top:260px; right:0px; bottom:0; left:-550px;
  
  padding: 20px 0;
  width: 450px;
  height:30px;

  background: #0D6;
  border: 1px solid #0D6;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button2:hover, .button:active 
{
  text-decoration: none;
  color: #0C5;
  border-color: #0C5;
  background: #FFF;
}

.button2 span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button2 span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button2:hover span, .button:active span 
{
  padding-right: 30px;
}

.button2:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: #0C5;
  right: 0;
  top: 50%;
}

.parallax {
    /* The image used */
    background-image: url('wallpaper.jpg');
    width:100%;
    /* Full height */
    height: 100%; 
    
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Set a style for all buttons */
.button3 {
    background-color: #333;
    color: white;
    padding: 25px 30px;
    margin:-50px 1205px;
    border: #4CAF50;
    cursor: pointer;
    width: 140px;
	height:20px;
	top:00px;
	left:100px;
}
.middle1{
	background:#afbdd4;
	padding:0px;
	}
	.header {
		background:#afbdd4;
  font-size: 35px;
  text-transform: uppercase;
  letter-spacing: 5px;
  padding:0px 0px 0px 0px;
}



@import url('http://fonts.googleapis.com/css?family=Raleway:400,200');

.transition { transition: .3s cubic-bezier(.3, 0, 0, 1.3) }
.card {
    background-color: #fff;
    bottom: 0;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
    height: 300px;
    left: 5%;
	margin-top:70%;

    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    width: 300px;
}
.card:hover {
    height: 450px;
    width: 300px;
}
.card:hover .cta-container {
    display: inline;
    margin-top: 380px;
}
.card:hover .card_circle {
    background-size: cover;
    border-radius: 0;
    margin-top: -130px;
}
.card:hover h4 {
    background: #3487f7;
    color: #fff;
    margin-top: 100px;
    padding: 5px;
}
.card:hover h4 small { color: #fff }
.card:hover p { margin-top: 300px }
.card_circle {
    background: url('wallpaper1.jpg') no-repeat center bottom;
    background-color: #3487f7;
    background-size: cover;
    border-radius: 50%;
    height: 400px;
    margin-left: -75px;
    margin-top: -270px;
    position: absolute;
    width: 450px;
}
h4 {
    color: #3487f7;
    font-family: 'Raleway', sans-serif;
    font-size: 24px;
    font-weight: 200;
    margin-top: 150px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 9999;
}
.para {
    color: rgba(0,0,0,.6);
    font-family: 'Raleway', sans-serif;
    font-size: 100%;
    font-weight: normal;
    margin-top: 200px;
    position: absolute;
    text-align: center;
    z-index: 9999;
}
.cta-container {
    display: none;
    margin-top: 320px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 9999;
}
.cta {
    -moz-border-radius: 2px;
    -moz-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -webkit-border-radius: 2px;
    -webkit-transition: 0.2s ease-out;
    background-clip: padding-box;
    border: 2px solid #3487f7;
    border-radius: 2px;
    color: #3487f7;
    display: inline-block;
    font-family: 'Raleway', sans-serif;
    font-size: 17px;
    font-weight: 400;
    height: 36px;
    letter-spacing: 0.5px;
    line-height: 36px;
    margin-bottom: 15px;
    padding: 0 2rem;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.2s ease-out;
}
.cta:hover {
    background-color: #3487f7;
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    color: #fff;
    -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.info{
    background-color:black;
	opacity: 0.3;
	width:62%;
	height:90%;
	padding:30px;
	margin-left:450px;
	z-index:-1;
} 

.footer-distributed{
	background-color: black;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;


	font: bold 16px sans-serif;
	text-align: left;

	padding: 50px 60px 40px;
	margin-top: px;
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

   .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
     h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 25px;
      color: #000;
      margin-bottom: 5px;
      font-size: 50px;
      letter-spacing: -4px;
    }
    h2 {
      color: #444;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
      background: #161923;
    }
    
    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 90px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: black;
      margin: 0;
      margin-top: 70px;
      font-family: 'Playfair Display';
      letter-spacing: -1px;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: black;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: rgba(0,0,0,0.8);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #444;
      padding: 10px;
      margin: 0 0 0 0;
      background: #161923;
      color: #FFF;
      float: left;
      width: 100%;
    }
    .credit a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    
    .page_container {
      max-width: 960px;
      margin: 50px auto;
    }

    .header {
      background: white;
      padding-top: 10px;
      margin-bottom: 0;
    }
    .header h1{
      margin-bottom: 0;
      font-size: 45px;
    }

    .header .menu {
      padding-bottom: 10px;
    }

    .benefits {
      color: black;
      height: 100px;
      background: #FFF;
      position: relative;
      width: 100%;
      padding: 25px;
      font-size: 40px;
      font-weight: 100;
      float: left;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .benefits .page_container{
      margin-bottom: 50px;
      margin-top: 0;
    }
  
    .immersive_slider .is-slide .content h2{
      line-height: 140%;
      font-weight: 100;
      color: white;
      font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
      color: white;
    }
  
  .immersive_slider .is-slide .content p{
    float: left;
    font-weight: 100;
    width: 100%;
    font-size: 17px;
    margin-top: 5px;
  }

</style>
<title>Homies</title>
</head>
<body >
 <div class="parallax">
   <div>
     <ul class="topnav" id="myTopnav">
        <li><a href="#">Home</a></li>
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
  </div>
	
 <a href="owner.php" class="button"> <span>Owner </span></a><a href="rooms.php" class="button1"> <span>Looking for rooms </span></a>
 <a href="hostel.php" class="button2"> <span>Looking for Hostel room </span></a>
   <div class="middle1">
	<form action="email.php" method="post" name="sign up for beta form">
       <div class="header">
        <p>Feel free and dont forget to Signup  </p>
        </div>
        <div class="description">
        <p>We will provide you updates for rooms that will be available at your city .</p>
        </div>
        <div class="input1">
        <input type="text" class="button4" id="email" name="email" placeholder="NAME@EXAMPLE.COM">
        <input type="submit" class="button4" id="submit" value="Stay Updated">
      </div>
    </form>
		
   </div>
<div class="parallax">	

<div class="card transition">
  <h4 class="transition">Awesome Headline</h4>
  <p class="para">Whole Bhopal is available at Homies , So why bother to search .</p>
  <div class="cta-container transition"><a href="contact.php" class="cta">Call to action</a></div>
  <div class="card_circle transition"></div>
</div>
<div class="info">
<div>
<font color="white"size="6em" align="center"><center>WHY US ?</center></font>
<div id="list8">
   <ul><br><br><br><br>
      <li><a><font color="FFFAFA">Because we believe that no City should be a stranger to a Bachelor</font></a></li><br><br><br><br>
      <li><a><font color="FFFAFA">Because we believe that every Bachelor has the right to live well</font></a></li><br><br><br><br>
      <li><a><font color="FFFAFA">Because we believe Bachelor homes can be secure, classy and affordable</a></font></li><br><br><br><br>
	  <li><a><font color="FFFAFA">Beacause we believe that no one(Man,Woman,Girl,Boy) have to face any<br>problem to find Home, Boy's hostel or Girl's hostel</a></font></li><br><br><br><br><br><br>
      <li><a><font color="FFFAFA">If you do feel the same, please drop us a line </a></font></li><br><br><br><br>
      <li><a><font color="FFFAFA">Team - Homies group Limited</a></font></li><br><br><br><br>
   </ul>
</div>
</div>

</div>
</div>
</div>
<div class="parallax">
 <div class="wrapper">
    <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <div class="slide" data-blurred="img/p1_blurred.png">
            <div class="content">
              <h2><a target="_blank">Hello THERE !!</a></h2>
              <p>It’s never been easier to search rooms .<br>
			  <br>
              Sign In  . We provide best rooms for you .</p></div>
            <div class="image">
              <a target="_blank">
                <img src="img/p1.png" alt="Slider 1">
              </a>
            </div>
          </div>
          <div class="slide" data-blurred="img/p2_blurred.png">
            <div class="content">
              <h2><atarget="_blank">We are here for you !!!</a></h2>
              <p>Its good to get information at your home rather than<br><br> searching all over the places for empty rooms <br><br>pamphlet and calling friends to search a rooms<br><br> for you.   </p></div>
            <div class="image">
             <a target="_blank"> <img src="img/p2.png" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="img/p3_blurred.png">
            <div class="content">
              <h2><a target="_blank">Choose City you want to.. </a></h2>
              <p>Newcomers find it easy .<br><br> Stay tuned for more updates...</p>
            </div>
            <div class="image">
              <a target="_blank"><img src="img/p3.png" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="img/p4_blurred.png">
            <div class="content">
              <h2><a target="_blank">Patience is all you need..</a></h2>
              <p>While publishing an ad in our website .We hope <br><br>you get a call soon but it may take longer than <br><br>expected so dont get upset we work until <br><br>you find rentals</div>
            <div class="image">
              <a target="_blank">
                <img src="img/p4.png" alt="Slider 1">
              </a>
            </div>
          </div>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
  	</div>
  	<div class="benefits">
      <div class="page_container">

  	  </div>
  	</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>
  <script>

  	var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  	s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</div>
		<footer class="footer-distributed">


			<div class="footer-left">

				<h3>Homies<span></span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
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

				<p class="footer-company-name">Homies @2017</p>

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