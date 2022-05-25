<html>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <link href="CSS  main.css" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
      
      <div id="main">
      <ul class="w3-ul w3-center">
</head>

<?php if(isset($_GET['name'])): ?>
    Your Name is <?php echo $_GET["name"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['email'])): ?>
    Your Email Name is <?php echo $_GET["email"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['date'])): ?>
    The Date of your lesson is <?php echo $_GET["date"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['time'])): ?>
    The Time of your lesson is <?php echo $_GET["time"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['instrument'])): ?>
    Your Instrument of choice is <?php echo $_GET["instrument"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['level'])): ?>
    Your are at <?php echo $_GET["level"]; ?> Level
<?php endif; ?> <br>

<?php if(isset($_GET['skills'])): ?>
    The skill you would most like to learn is <?php echo $_GET["skills"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['genre'])): ?>
    The Genre you are looking to learn is <?php echo $_GET["genre"]; ?> 
<?php endif; ?> <br>

<br>

<?php

$con = mysqli_connect("localhost","root","26august","mydatabase");
//You need to place value for your localhost username and password. Normally localhost MySQL database username is root and password blank or root. 
//For example, the code is as below
$con = mysqli_connect('localhost', 'root', '26august','mydatabase');
//The “db_contact” is our database name that we created before.
//After connection database you need to take post variable from the form. See the below code

$name = $_GET["name"];
$email = $_GET["email"];
$date = $_GET["date"];
$time = $_GET["time"];
$instrument = $_GET["instrument"];
$level = $_GET["level"];
$skills = $_GET["skills"];
$genre = $_GET["genre"];
//When you will get the post variable then you need to write the following SQL command.

$sql = "INSERT INTO `Book` (`Name`, `Email`, `Date`, `Time`, `Instrument`,`Level`, `Skill`, `Genre`) 
VALUES ('$name','$email', '$date', '$time', '$instrument','$level', '$skills','$genre')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Booking Complete";
}

?>

<br><br>
<ul class="navigation">
    <div class="w3-container w3-blue w3-right w3-allerta">
    <p class="w3-xxxlarge" >Links</p><br>

<html>
    If you would like to make another booking please follow this link:<br>
    <li><a href="Book.html">Book Here</a></li><br>
    If you would like to learn specfic song please follow this link:<br>
    <li><a href="Songs.html">Request Songs</a></li><br>
    If you would like to pay for your esson please follow this link:<br>
    <li><a href= "Payment.html">To Payment page</a></li><br>
    If you would like to make inqueries about lessons please feel free to contact us here:<br>
    <li><a href="Contact.html">Contact Us</a></li><br>
    Return to Homepage:<br>
    <li><a href="Index.html">Home</a></li><br>
    </div>
    </ul>
    </ul>
</ul>
</html>