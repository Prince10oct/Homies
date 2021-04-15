<?php
session_start();

?>
<html>
  <head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />
<title>Homies</title>

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


	.dark-matter {
	margin-left: 0px;
	margin-right: auto;
	margin-top:40px;
	max-width: 500px;
	background: #555;
	padding: 0px 30px 20px 30px;
	font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #D3D3D3;
	width:500px;
	text-shadow: 1px 1px 1px #444;
	border: none;
	border-radius: 10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
}
.dark-matter h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.dark-matter h1>span {
    display: block;
    font-size: 11px;
}
.dark-matter label {
    display: block;
    margin: 0px 0px 5px;
}
.dark-matter label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
.dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter textarea, .dark-matter select, .dark-matter input[type="number"],.dark-matter input[type="tel"]{
	border: none;
	color: #525252;
	height: 25px;
	line-height:15px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 5px 0px 5px 5px;
	width: 70%;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	background: #DFDFDF;
}
.dark-matter select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
	color: #525252;
	line-height: 25px;
}
.dark-matter textarea{
    height:100px;
	padding: 5px 0px 0px 5px;
	width: 70%;
}
.dark-matter .button {
	background: #FFCC02;
	border: none;
	padding: 10px 25px 10px 25px;
	color: #585858;
	border-radius: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	text-shadow: 1px 1px 1px #FFE477;
	font-weight: bold;
	box-shadow: 1px 1px 1px #3D3D3D;
	-webkit-box-shadow:1px 1px 1px #3D3D3D;
	-moz-box-shadow:1px 1px 1px #3D3D3D;
}

.dark-matter .button:hover {
    color: #333;
    background-color: #EBEBEB;
}
.map{
	 position: absolute;
    left: 585px;
    top: 185px;
    z-index: 1;
}
  .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      position:absolute;
left:700px;
top:185px;
z-index:1;	  }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
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
	body{
	background-color:white}
	
#map {
        width: 55%;
        height: 650px;
margin-top:-90px;  
  
	}
	 .pale21{
	 background-color: #f2f2f2}

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




.setting {
  background:#DFDFDF ;
  margin: 0 auto 3px;
  padding: 1px;
  width: 80%;
  
}
.setting h2 {
  color: #999;
  font-size: 14px;
  font-weight: 400;
  margin: 0 0 6px;
  line-height: 24px;
}
.setting a[data-action] {
  cursor: pointer;
  color: #555;
  font-size: 14px;
  line-height: 24px;
  transition: color 0.2s;
}
.setting a[data-action] i {
  width: 1.25em;
  text-align: center;
}
.setting a[data-action]:hover {
  color: #f80;
}
.setting a[data-action].disabled {
  opacity: 0.35;
  cursor: default;
}
.setting a[data-action].disabled:hover {
  color: #555;
}
.image_picker .settings_wrap {
  overflow: hidden;
  position: relative;
}
.image_picker .settings_wrap .drop_target,
.image_picker .settings_wrap .settings_actions {
  float: left;
}
.image_picker .settings_wrap .drop_target {
  margin-right: 18px;
}
.image_picker .settings_wrap .settings_actions {
  margin-top: 12px;
}
.settings_actions.vertical a {
  display: block;
}
.drop_target {
  position: relative;
  cursor: pointer;
  background: #e6e6e6;
  border-top: 1px solid #cccccc;
  border-radius: 4px;
  width: 72px;
  height: 72px;
  padding: 4px 6px 6px;
  transition: all 0.2s;
}
.drop_target input[type="file"] {
  visibility: hidden;
}
.drop_target:before {
  content: '\f0ee';
  font-family: FontAwesome;
  position: absolute;
  display: block;
  width: 60px;
  line-height: 60px;
  text-align: center;
  font-size: 32px;
  color: rgba(0, 0, 0, 0.3);
  transition: color 0.2s;
}
.drop_target:hover,
.drop_target.dropping {
  background: #f80;
  border-top-color: #cc6d00;
}
.drop_target:hover:before,
.drop_target.dropping:before {
  color: rgba(0, 0, 0, 0.6);
}
.drop_target .image_preview {
  width: 100%;
  height: 100%;
  background: no-repeat center;
  background-size: contain;
  position: relative;
  z-index: 2;
}
.image_details {
  width: 192px;
  padding: 4px;
  background: #e6e6e6;
  border-radius: 4px;
  position: absolute;
  top: 0;
  left: 84px;
  z-index: 5;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.4s;
}
.dropped ~ .image_details {
  opacity: 1;
  pointer-events: all;
}
.image_details:before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-right-color: #e6e6e6;
  position: absolute;
  left: -12px;
  top: 10px;
}
.image_details .input_line {
  display: block;
  overflow: hidden;
  margin-bottom: 4px;
}
.image_details .input_line:last-of-type {
  margin-bottom: 0;
}
.image_details .input_line span,
.image_details .input_line input {
  float: left;
  line-height: 24px;
}
.image_details .input_line span {
  font-size: 12px;
  color: #666;
  width: 20%;
}
.image_details .input_line input[type="text"] {
  width: 100%;
  color: #444444;
  appearance: none;
  border: 1px solid #e6e6e6;
  border-radius: 3px;
  background: #fff;
  height: 24px;
  line-height: 18px;
  padding: 3px 5px;
  font-size: 14px;
  transition: border 0.2s;
}
.image_details .input_line input[type="text"]:hover,
.image_details .input_line input[type="text"]:focus {
  outline: 0;
  border: 1px solid #f80;
}
.image_details .input_line input[type="text"]::-webkit-input-placeholder {
  font-size: 14px;
  color: #999;
}
.image_details a.confirm {
  position: absolute;
  right: -12px;
  top: 50%;
  margin-top: -12px;
  display: block;
  width: 21px;
  height: 21px;
  border-radius: 100%;
  background: #eee;
  line-height: 23px;
  text-align: center;
  font-size: 16px;
}

.setting:last-of-type {
  height: 82px;
}

<title>Homies</title>

    </style>
  </head>
  <body >
    
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
<form action="flatownersubmit.php"  method="post" class="dark-matter" enctype="multipart/form-data" id="qwe">
    <h1>Form for room owner
        <span>Please fill the following field</span>
    </h1>
    </label>
	<label>
        <span>Landlord name</span>
        <input id="name" type="text" name="l_name"  placeholder="Landlord Name" oninvalid="alert('enter a valid name');" pattern=".{5,}"required/>
    </label>
    <label>
	<span>city</span>
	<input type="text" name="city2" id="city2" placeholder="city" oninvalid="alert('enter the city');" pattern=".{5,}"required/>
	</label>
	<label>
	<span>locality</span>
	<input type="text" name="locality" id="locality" placeholder="locality" oninvalid="alert('enter the city');" pattern=".{5,}"required/>
	</label>
    <label>
        <span>Contact no</span>
        <input id="number" type="number" name="number" placeholder="Contact no" oninvalid="alert('contact no');" pattern=".{10,}" required>
    </label>
    <label>
	<span>No of members</span>
	<input type="number" id="no_of_members" name="no_of_members" placeholder="No of members allowed" oninvalid="alert('fill no of members allowed');" required>
	</label>
     <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;	<b>Gender </b>   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;               Boys<input type="radio" name="sex" value="boys" oninvalid="alert('select boys/girls');" required>
		Girls
	<input type="radio" name="sex" value="girls" oninvalid="alert('select boys/girls');" required>
</label>
<br>

     <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	<b>Room Empty </b> 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          Yes  <input type="radio" name="empty" value="yes" oninvalid="alert('select empty');" required>
		No
	<input type="radio" name="empty" value="no" oninvalid="alert('select empty');" required>
 </label><br>
<label><span>Type of house</span>
<select name="type_of_house" form="qwe">
<option value="1B">1 B</option>
<option value="1BK">1 BK</option>
<option value="1BHK">1 BHK</option>
<option value="2BHK">2 BHK</option>
<option value="3BHK">3 BHK</option>
<option value="Duplex">Duplex</option>
</select>
</label>
<label>
<span>Rent </span>
<input type="number" name="rent"  placeholder="Rent of your House">
</label>

 <p style="font-size:20px;"> Images of your flat</p>
 <div class="setting image_picker">
 
 <div class="settings_wrap">
    <label class="drop_target" id="drop_target">
      <div class="image_preview" id="image_preview"></div>
      <input id="inputFile" type="file" name="fileToUpload" onclick="inpu1();" onchange="return ValidateFileUpload();" >
    </label>
    <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from your gallery</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
   
  </div>
</div>
<div class="setting image_picker">

  <div class="settings_wrap">
    <label class="drop_target" id="drop_target1">
      <div class="image_preview" id="image_preview1"></div>
      <input id="inputFile1" type="file" name="fileToUpload1" onclick="inpu2();" onchange="return ValidateFileUpload1();" />
    </label>
    <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from your gallery</a><a class="disabled" data-action="remove_current_image1"><i class="fa fa-ban"></i> Remove Current Image</a></div>
    
  </div>
</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script>
		
	<br>
	<br>
<label> <span> Latitude: </span><input size="20" type="text" id="latbox" name="lat" readonly></label>
 <label>  <span> Longitude: </span><input size="20" type="text" id="lngbox" name="lng" readonly> </label>
 <label>
           <span>&nbsp;</span> 
        <input type="submit" class="button"  name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="button"  name="Reset">
	

    </label>   
</form>

    

<input id="pac-input" class="controls" type="text" placeholder="enter locality ">
 	
 <div id="map"  class="map"></div>
 <script>

    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,

        });
		
var  marker;

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        
		});
		
            var icon = {
              url: 'logo4.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
           
	marker=new google.maps.Marker({
              map: map,
              icon: icon,
              title: 'drag the marker to your home',
              position: {lat: -33.8688, lng: 151.2195}
			            
		   });
		   
       var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // mos for that place.
        searchBox.addListener('places_changed', function() {
			marker.setMap(null);
          var places = searchBox.getPlaces();
         
          if (places.length == 0) {
            return;
          }
		  
		  // Clear out the old markers.
          
		
         

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
                      
		  if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: 'logo4.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
           
            // Create a marker for each place.
           marker=new google.maps.Marker({
              map: map,
              icon: icon,
              title: 'drag the marker to your home',
              position: place.geometry.location,
			  draggable:true
           
		   });
		   google.maps.event.addListener(marker, 'drag', function(event){
       document.getElementById("latbox").value = event.latLng.lat();
       document.getElementById("lngbox").value = event.latLng.lng();
	    
});

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
	
      }
	
</script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC6NOsLvBW2JwL4LOwG0hi60iEXOQ5SyA&libraries=places&callback=initAutocomplete">
    </script>
<script>

 function ValidateFileUpload() {
        var fuData = document.getElementById('inputFile');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an 1st image of 1 seater room");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
	
function inpu1()
{

var $dropzone = $('.image_picker'),
    $droptarget = $('#drop_target'),
    $dropinput = $('#inputFile'),
    $dropimg = $('#image_preview'),
    $remover = $('[data-action="remove_current_image"]');

$dropzone.on('dragover', function() {
  $droptarget.addClass('dropping');
  return false;
});

$dropzone.on('dragend dragleave', function() {
  $droptarget.removeClass('dropping');
  return false;
});

$dropzone.on('drop', function(e) {
  $droptarget.removeClass('dropping');
  $droptarget.addClass('dropped');
  $remover.removeClass('disabled');
  e.preventDefault();
  
  var file = e.originalEvent.dataTransfer.files[0],
      reader = new FileReader();

  reader.onload = function(event) {
    $dropimg.css('background-image', 'url(' + event.target.result + ')');
  };
  
  console.log(file);
  reader.readAsDataURL(file);

  return false;
});

$dropinput.change(function(e) {
  $droptarget.addClass('dropped');
  $remover.removeClass('disabled');
  $('.image_title1 input').val('');
  
  var file = $dropinput.get(0).files[0],
      reader = new FileReader();
  
  reader.onload = function(event) {
    $dropimg.css('background-image', 'url(' + event.target.result + ')');
  }
  
  reader.readAsDataURL(file);
});

$remover.on('click', function() {
  $dropimg.css('background-image', '');
  $droptarget.removeClass('dropped');
  $remover.addClass('disabled');
  $('.image_title1 input').val('');
});

$('.image_title1 input').blur(function() {
  if ($(this).val() != '') {
    $droptarget.removeClass('dropped');
  }
});
}

 function ValidateFileUpload1() {
        var fuData = document.getElementById('inputFile');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an 1st image of 1 seater room");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
	
function inpu2()
{

var $dropzone = $('.image_picker'),
    $droptarget = $('#drop_target1'),
    $dropinput = $('#inputFile1'),
    $dropimg = $('#image_preview1'),
    $remover = $('[data-action="remove_current_image1"]');

$dropzone.on('dragover', function() {
  $droptarget.addClass('dropping');
  return false;
});

$dropzone.on('dragend dragleave', function() {
  $droptarget.removeClass('dropping');
  return false;
});

$dropzone.on('drop', function(e) {
  $droptarget.removeClass('dropping');
  $droptarget.addClass('dropped');
  $remover.removeClass('disabled');
  e.preventDefault();
  
  var file = e.originalEvent.dataTransfer.files[0],
      reader = new FileReader();

  reader.onload = function(event) {
    $dropimg.css('background-image', 'url(' + event.target.result + ')');
  };
  
  console.log(file);
  reader.readAsDataURL(file);

  return false;
});

$dropinput.change(function(e) {
  $droptarget.addClass('dropped');
  $remover.removeClass('disabled');
  $('.image_title1 input').val('');
  
  var file = $dropinput.get(0).files[0],
      reader = new FileReader();
  
  reader.onload = function(event) {
    $dropimg.css('background-image', 'url(' + event.target.result + ')');
  }
  
  reader.readAsDataURL(file);
});

$remover.on('click', function() {
  $dropimg.css('background-image', '');
  $droptarget.removeClass('dropped');
  $remover.addClass('disabled');
  $('.image_title1 input').val('');
});

$('.image_title1 input').blur(function() {
  if ($(this).val() != '') {
    $droptarget.removeClass('dropped');
  }
});
}

</script> 
  <div id="pane2l"></div>
  
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
					<a href="https://twitter.com/login?lang=en\"><i class="fa fa-twitter"></i></a>
					<a href="https://in.linkedin.com"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com"><i class="fa fa-github"></i></a>

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