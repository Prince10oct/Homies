<!DOCTYPE html>

<html >
<?php
session_start();
if(isset($_SESSION['email']))
{
header("Location:main.php");
	
}
require 'PHPMailerAutoload.php';
$message="";
$message1="";
     if(isset($_POST['submit']))
	 {
		
    $conn=mysqli_connect("localhost","root","","home");
    if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $sql1="select * from login where email='$email' ";
	$result=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result) != 0)
	{
	 $message="Email already exist";
		}
		else
	{
		$sql="INSERT INTO login (f_name,l_name,email,password) VALUES ('$fname','$lname','$email','$password')";
	$query=mysqli_query($conn,$sql);
	if($query)
	{		$_SESSION['email']=$email;
            $_SESSION['fname']=$fname;
	mysqli_close($conn);	
	date_default_timezone_set('Etc/UTC');



//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "shubham.asati2626@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "plmoknijbuhv";

//Set who the message is to be sent from
$mail->setFrom('shubham.asti2626@gmail.com', 'Homies');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress("$email", "$fname");

//Set the subject line
$mail->Subject = 'hi '.$fname ;
$body = file_get_contents('email.php');
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//Replace the plain text body with one created manually
$mail->msgHTML($body);
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {

   echo " hii Message sent!";
header("Loacation:main.php");
   }

}

	header("Location:main.php");
    }
	}
 
	 
     if(isset($_POST['submit1']))
	 {
		 
    $conn=mysqli_connect("localhost","root","","home");
    if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}

    $email=$_POST['hogwarts'];
	$password=$_POST['hocrux'];
	
$sql="select f_name,email,password from login where email='$email' and password='$password' ";
	$result1=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result1) == 0)
	{
	 $message1="invalid Email or password";
	}
		else
	{
		while($row = mysqli_fetch_assoc($result1)){
	
		$_SESSION['email']=$row['email'];
	
	$_SESSION['fname']=$row['f_name'];	
			
mysqli_close($conn);	
header("Location:main.php");

    }
	

	}
	
	 }	 
?>

<head>

  <meta charset="UTF-8">
  <title>Homies</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style1.css">
	  
	  <style>
	  *, *:before, *:after {
  box-sizing: border-box;
}


.form {
  background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}

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



</style>
  
</head>


<body>

<div class="parallax">
<div>

<ul class="topnav" id="myTopnav">
  <li><a href="#">Welcome </a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
</div>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form  action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="on" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="on"/>
          <label>
              <?php echo$message;?><span class="req"></span>
            </label>
            
		  </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="submit" class="button button-block"/>get Started</button>
          
          </form>
		  

        </div>
		
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="#" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="hogwarts" required autocomplete="on"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="hocrux" required autocomplete="off"/>
          <label >
              <?php echo$message1;?><span class="req"></span>
            </label>
			</font>
          
		  </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="submit1"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
