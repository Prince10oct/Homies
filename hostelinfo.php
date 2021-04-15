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
		
<link type="text/css" rel="stylesheet" href="style.css"/>
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
  <?php
    $id=$_GET['id'];
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
$query=mysqli_query($conn,"select *from hostel where id=$id");	
global $rows;
$rows=mysqli_fetch_array($query);
if(!$rows)
{
	header("Location:hostel.php");
}
	  ?>  

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


	h1{
		font-size:3em;
	}
	h2{
		font-size:1.5em;
	}
	h6{
		font-size:1em;
	}
	
      body{
		  background:white;
	  }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
	
	.container {
  background: #eee;
}

.articles {
	margin:0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

.articleShort {
	
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 0%;
          flex: 1 1 0%;
}

.articleMain {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
}

.card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
  background-color: white;
  margin: 15px;
  width:100%;
}
.card .card-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
}
.card .card-content h3, .card .card-content p {
  max-width: calc(100% - 30px);
  padding-left: 30px;
  
}
.card .card-content p {
font-size:2em;
  
}
.card .card-content h3 {
font-size:5em;
  
}
.card .card-image {
  min-width: 262px;
}

.card .card-image a img {
  display: block;
  max-width: 100%;
  height: auto;
}

@media screen and (max-width: 992px) {
  .articleShort {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 100%;
            flex: 1 1 100%;
  }
}
@media screen and (max-width: 480px) {
  .card {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
			
  }
  .card .card-content h3, .card .card-content p {
    text-align: center;
  }
}
 @keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

 
div#slider { overflow: hidden; 
width:60%;
margin: 0 auto;
}
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}


#map1 {
   height:400px;
   width:100%;		
 
   margin-top:800px;
   margin-left:-590px;
	
   
    
	}
a.a1, a.a1:before {
  transition: all .4s;
  
}
div.a11 {
  max-width: 900px;
  margin: 19em auto;
 
}
div.a11:hover a {
  opacity: .4;
}
a.a1 {
	height:80px;
  position: relative;
  display: block;
  max-width: 900px;
  padding: 20px 20px 20px 45px;
  box-sizing: border-box;
  color: #777;
  background: #fAfAfA;
  text-decoration: none;
  font-size:2em;
  font-family: "Open Sans", "Segoe UI", Arial, sans-serif;
}
a.a1:before {
  content: "";
  position: absolute;
  left:0; bottom:0; top:0;
  width: 20px;
  background: #7F8C9A;
}
a.a1:nth-child(even):before {
  background: #34495E;
}
a.a1 + a.a1 {
  border-top: 2px solid #ededed;
}
div.a11 a:hover,
div.a11 a:focus {
  opacity: 1;
  padding-left: 55px;
}
div.a11 a:hover:before,
div.a11 a:focus:before {
  width: 30px;
}

  
#bg {
	z-index:2;
		position: fixed;
		right: 7%;
		top: 40%;
		background: #ffffff; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iNDAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2JiYmJiYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9yYWRpYWxHcmFkaWVudD4KICA8cmVjdCB4PSItNTAiIHk9Ii01MCIgd2lkdGg9IjEwMSIgaGVpZ2h0PSIxMDEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==); background: -moz-radial-gradient(center, ellipse cover,  #ffffff 40%, #bbbbbb 100%); background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(40%,#ffffff), color-stop(100%,#bbbbbb)); background: -webkit-radial-gradient(center, ellipse cover,  #ffffff 40%,#bbbbbb 100%); background: -o-radial-gradient(center, ellipse cover,  #ffffff 40%,#bbbbbb 100%); background: -ms-radial-gradient(center, ellipse cover,  #ffffff 40%,#bbbbbb 100%); background: radial-gradient(ellipse at center,  #ffffff 40%,#bbbbbb 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#bbbbbb',GradientType=1 );
}
.contact {
		position: absolute;
		left: 50%;
		top: 50%;
		margin-left: -125px;
		margin-top: -125px;
		height: 150px;
		width: 150px;
		background: rgba(0, 0, 0, 0.1);
		
		border-radius: 2px;
		-ms-border-radius: 2px;
		-moz-border-radius: 2px;
		-o-border-radius: 2px;
		-webkit-border-radius: 2px;
}
.contact .envelope {
		position: absolute;
		height: 93px;
		width: 165px;
		left: 50%;
		margin-left: -83px;
		top: 50%;
		margin-top: -50px;
		background: #F9F9F9;
		
		transition: margin-top 300ms;
		-ms-transition: margin-top 300ms;
		-moz-transition: margin-top 300ms;
		-o-transition: margin-top 300ms;
		-webkit-transition: margin-top 300ms;
}
.contact:hover .envelope {
		transition-delay: 150ms;
		-ms-transition-delay: 150ms;
		-moz-transition-delay: 150ms;
		-o-transition-delay: 150ms;
		margin-top: -20px;
}
.contact .envelope .top {
		position: absolute;
		top: -3px;
		left: 0px;
		width: 100%;
		height: 73px;
		z-index: 30;
		overflow: hidden;
						
		transform-origin: top;
		-ms-transform-origin: top;
		-moz-transform-origin: top;
		-o-transform-origin: top;
		-webkit-transform-origin: top;
					
		transition: transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
		-ms-transition: -ms-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
		-moz-transition: -moz-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
		-o-transition: -o-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
		-webkit-transition: -webkit-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
}
.contact:hover .envelope .top {
		transition: transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
		-ms-transition: -ms-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
		-moz-transition: -moz-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
		-o-transition: -o-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
		-webkit-transition: -webkit-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
		
		height: 10px;
		top: -60px;
		
		transform: rotateX(180deg);
		-ms-transform: rotateX(180deg);
		-moz-transform: rotateX(180deg);
		-o-transform: rotateX(180deg);
		-webkit-transform: rotateX(180deg);
}
.contact .envelope .outer {
		position: absolute;
		bottom: 0px;
		left: 0px;
		border-left: 83px solid transparent;
		border-right: 82px solid transparent;
		border-top: 70px solid #EEE;
}
.contact .envelope .outer .inner {
		position: absolute;
		left: -81px;
		top: -73px;
		border-left: 81px solid transparent;
		border-right: 80px solid transparent;
		border-top: 68px solid #333;
}
.contact .envelope .bottom {
		position: absolute;
		z-index: 20;
		bottom: 0px;
		left: 2px;
		border-left: 81px solid transparent;
		border-right: 80px solid transparent;
		border-bottom: 45px solid #333;
}
.contact .envelope .left {
		position: absolute;
		z-index: 20; top: 0px;
		left: 0px;
		border-left: 81px solid #333;
		border-top: 45px solid transparent;
		border-bottom: 45px solid transparent;
}
.contact .envelope .right {
		position: absolute;
		z-index: 20;
		top: 0px;
		right: 0px;
		border-right: 80px solid #333;
		border-top: 45px solid transparent;
		border-bottom: 45px solid transparent;
}
.contact .envelope .cover {
		position: absolute;
		z-index: 15;
		bottom: 0px;
		left: 0px;
		height: 55%;
		width: 100%;
		background: #EEE;
}
.contact .envelope .paper {
		position: absolute;
		height: 83px;
		padding-top: 10px;
		width: 100%;
		top: 0px;
		left: 0px;
		background: #F9F9F9;
		z-index: 10;
		transition: margin-top 300ms 0ms;
		-ms-transition: margin-top 300ms 0ms;
		-moz-transition: margin-top 300ms 0ms;
		-o-transition: margin-top 300ms 0ms;
		-webkit-transition: margin-top 300ms 0ms;
}
.contact:hover .envelope .paper {
		margin-top: -60px;
		transition: margin-top 300ms 150ms;
		-ms-transition: margin-top 300ms 150ms;
		-moz-transition: margin-top 300ms 150ms;
		-o-transition: margin-top 300ms 150ms;
		-webkit-transition: margin-top 300ms 150ms;
}
.contact .envelope .paper a {
		position: relative;
		display: block;
		font-size: 14px;
		margin: 5px;
		margin-bottom: 0px;
		text-align: center;
		color: #333;
		text-decoration: none;
}
.contact .envelope .paper a.call .i {
		position: absolute;
		top: 2px;
		left: 20px;
		display: inline-block;
		width: 3px;
		height: 5px;
		border-width: 5px 0 5px 2px;
		border-style: solid;
		border-color: #555;
		background: transparent;
		
		transform: rotate(-30deg);
		-ms-transform: rotate(-30deg);
		-moz-transform: rotate(-30deg);
		-o-transform: rotate(-30deg);
		-webkit-transform: rotate(-30deg);

		border-top-left-radius: 3px 5px;
		border-bottom-left-radius: 3px 5px;
		-moz-border-radius-topleft: 3px 5px;
		-moz-border-radius-bottomleft: 3px 5px;
		-webkit-border-top-left-radius: 3px 5px;
		-webkit-border-bottom-left-radius: 3px 5px;
																																				
		transition: border-color 300ms;
		-ms-transition: border-color 300ms;
		-moz-transition: border-color 300ms;
		-o-transition: border-color 300ms;
		-webkit-transition: border-color 300ms;
}
.contact .envelope .paper a {
		color: #333;

		transition: color 200ms;
		-ms-transition: color 200ms;
		-moz-transition: color 200ms;
		-o-transition: color 200ms;
		-webkit-transition: color 200ms;
}
.contact .envelope .paper a:hover {
		color: #EEE;
}
.contact .envelope .paper a.call:hover .i {
		border-color: #DDD;
}
.contact .envelope .paper a.mail .i {
		position: absolute;
		top: 0px;
		left: 17px;
		display: inline-block;
		font-size: 13px;
		font-weight: bold;
}
   </style>
  </head>
  <body >
  <div id="bg">
<div class="contact">
	<div class="envelope">
		<div class="top">
			<div class="outer"><div class="inner"></div></div>
		</div>
		<div class="bottom"></div>
		<div class="left"></div>
		<div class="right"></div>
		<div class="cover"></div>
		<div class="paper">
			<a class="call" href="#"><div class="i"></div>8120387578</a>
			<a class="mail" href="#"><div class="i">@</div>Call Now</a>
			<a class="call" href="#"><div class="i"></div>8962404952</a>
			<a class="mail" href="#"><div class="i">@</div>Call Now</a>
		</div>
	</div>
</div>
  </div>
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

	<div class="container"><div class="row articles">
  <article class="articleShort articleMain">
    <div class="card">
      <div class="card-image">
        <a href="#" title="title here">
          <img src="http://fakeimg.pl/262x316/?text=Hello" alt="alt here">
        </a>
      </div>
      <div class="card-content">
        <h3><?php echo $rows['h_name'];?>  <?php echo $rows['sex']?>  hostel</h3>
        <p>The prices of this hostel varies from <?php echo $rows['r_3s'];?> to <?php echo $rows['r_1s'];?> and it may be depend on the availability of rooms .<br>
		Other negotiations can be done with the hostel warden.<br>
         Give us a call and we will give maximum discount for you.		</p>
         
        
      </div>
    </div>
  </article></div>
 
	 <div id="slider">
<figure>
<img src="img_avatar.png" alt>
<img src="img_avatar2.png" alt>
<img src="img_avatar3.png" alt>
<img src="img_avatar2.png" alt>
<img src="img_avatar.png" alt>
</figure>
</div>


 
 <div id='map1' class="map">
 </div>
<div class="a11">
<a href="#" class="a1">There are <?php echo$rows['t_n_e_r_1s'];?> 1 seater empty room .Each having monthly charge of Rs. <?php echo $rows['r_1s']?>.</a>
<a href="#" class="a1">There are <?php echo$rows['t_n_e_r_2s'];?> 2 seater empty room .Each having monthly charge of Rs. <?php echo $rows['r_2s']?>.</a>
<a href="#" class="a1">There are <?php echo$rows['t_n_e_r_3s'];?> 3 seater empty room .Each having monthly charge of Rs. <?php echo $rows['r_3s']?>.</a>
<a href="#" class="a1">Mess is included in the hostel rent.</a>
<a href="#" class="a1">Well furnished and excellent services.</a>
<a href="#" class="a1">Give us a call and we will sort out best deal for you.</a>
</div>
  </div>
    
	
	 <script>
      function initMap() {
        var uluru = {lat: <?php echo $rows['lat'];?>, lng: <?php echo $rows['lng'];?>};
        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 8,
          center: uluru
        });
		
var icon = {
              url: 'logo4.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
			var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        var marker;
		   geocoder.geocode({'location': uluru}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
				
              map.setZoom(11);
               marker = new google.maps.Marker({     
                         
          map: map,
		  icon:icon,
        place: {
      location: uluru,
      query: results[0].formatted_address

    },
    // Attributions help users find your site again.
    attribution: {
      source: 'Google Maps JavaScript API',
      webUrl: 'https://developers.google.com/maps/'
    }
  });

        infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
      } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
	  }
		
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC6NOsLvBW2JwL4LOwG0hi60iEXOQ5SyA&callback=initMap">
    </script>     
   


	
		