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

<?php if(isset($_GET['firstname1'])): ?>
    Your First Name is <?php echo $_GET["firstname1"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['lastname1'])): ?>
    Your Last Name is <?php echo $_GET["lastname1"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['email1'])): ?>
    Your Email is <?php echo $_GET["email1"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['phone'])): ?>
    Your Phone Number is <?php echo $_GET["phone"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['message'])): ?>
    Your Message is <?php echo $_GET["message"]; ?>
<?php endif; ?> <br>

<br>

<?php

$con = mysqli_connect("localhost","root","26august","mydatabase");
//You need to place value for your localhost username and password. Normally localhost MySQL database username is root and password blank or root. 
//For example, the code is as below
$con = mysqli_connect('localhost', 'root', '26august','mydatabase');
//The “db_contact” is our database name that we created before.
//After connection database you need to take post variable from the form. See the below code

$firstname1 = $_GET["firstname1"]??"";
$lastname1 = $_GET["lastname1"]??"";
$email1 = $_GET["email1"]??"";
$phone = $_GET["phone"]??"";
$message = $_GET["message"]??"";
//When you will get the post variable then you need to write the following SQL command.

$sql = "INSERT INTO `contact` (`First Name`, `Last Name`, `Email`, `Phone`, `Message`) VALUES ('$firstname1','$lastname1', '$email1', '$phone', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>

<br><br>
<ul class="navigation">
    <div class="w3-container w3-blue w3-right w3-allerta">
    <p class="w3-xxxlarge" >Links</p><br>

<html>
    If you would like to make a booking please follow this link:<br>
    <li><a href="Book.html">Book Here</a></li><br>
    If you would like to learn specfic song please follow this link:<br>
    <li><a href="Songs.html">Request Songs</a></li><br>
    If you would like to pay for a lesson please follow this link:<br>
    <li><a href= "Payment.html">To Payment page</a></li><br>
    If you would like to make an additional inquery, please feel free to contact us again:<br>
    <li><a href="Contact.html">Contact Us</a></li><br>
    Return to Homepage:<br>
    <li><a href="Index.html">Home</a></li><br>
    </div>
    </ul>
    </ul>
</ul>
</html