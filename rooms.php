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
    
	margin-top:25px;
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
    
      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
	  input[type=text] {
    width: 280px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
margin:40px 0px;
	}

input[type=text]:focus {
    width: 100%;
}
input[type=radio]{
    border-radius: 20px;
height: 15px;
  width: 15px;
  	margin-left:50px;
	
}
input[type=submit] {
width: 170px;
height:40px;
background-color:#80ffaa;
  box-sizing: border-box;
    padding:10px 15px; 
    
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
margin:30px 55px;
	}
.parallax {
    /* The image used */
    background-image: url('wallpaper1.jpg');
    margin-top:-25px;
    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.form11{
margin:100px 450px;}

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
  </head>
  <body >
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
</div>	<div class="form11"><div class="control-group">
    	
	  <form autocomplete="on" method="post" action="roomslist.php" >

 <br> <input type="text" id="city" name="city" placeholder="Enter the city" oninvalid="alert('Enter the city');" required><br>
<table>

<tr><td>   </td>
<td><input type="radio" name="sex" value="boys" required> <font color="white"><b> Boy </b></font></td> <td><font color="white" ><b><input type="radio" name="sex" value="girls" required>  Girl   </b></font></td></tr>
</table>
 <input type="submit" value="Submit" name="hey">

	</form>
	</div>
</div>
		<script>
		function initAutocomplete() {
		  var input = document.getElementById('city');
        var searchBox = new google.maps.places.SearchBox(input);
		 map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		
}
</script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC6NOsLvBW2JwL4LOwG0hi60iEXOQ5SyA&libraries=places&callback=initAutocomplete">
    </script>		
		
		
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Homies<span></span></h3>

				<p class="footer-links">
					<a href="main.php">Home</a>				·
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
					<a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>


		</footer>

  </body>
</html>