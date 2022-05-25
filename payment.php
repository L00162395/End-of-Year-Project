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

<?php if(isset($_GET['cardtype'])): ?>
    Your are paying with a <?php echo $_GET["cardtype"]; ?> Card
<?php endif; ?> <br>

<?php if(isset($_GET['nameoncard'])): ?>
    The Name on the card is <?php echo $_GET["nameoncard"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['cardnumber'])): ?>
    The Number of the card is <?php echo $_GET["cardnumber"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['exp'])): ?>
    The Expiration date is <?php echo $_GET["exp"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['cvv'])): ?>
    The secutity number is  <?php echo $_GET["cvv"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['username'])): ?>
    Your are signed in as <?php echo $_GET["username"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['password'])): ?>
    You password is <?php echo $_GET["password"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['address'])): ?>
    Your address is <?php echo $_GET["address"]; ?> 
<?php endif; ?> <br>

<?php if(isset($_GET['address2'])): ?>
    <?php echo $_GET["address2"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['county'])): ?>
    You live in county <?php echo $_GET["county"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['country'])): ?>
    Your located in <?php echo $_GET["country"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['zip'])): ?>
    Your Eircode is <?php echo $_GET["zip"]; ?> 
<?php endif; ?> <br>

<br>

<?php

$con = mysqli_connect("localhost","root","26august","mydatabase");
//You need to place value for your localhost username and password. Normally localhost MySQL database username is root and password blank or root. 
//For example, the code is as below
$con = mysqli_connect('localhost', 'root', '26august','mydatabase');
//The “db_contact” is our database name that we created before.
//After connection database you need to take post variable from the form. See the below code

$cardtype = $_GET["cardtype"];
$nameoncard = $_GET["nameoncard"];
$cardnumber = $_GET["cardnumber"];
$exp = $_GET["exp"];
$cvv = $_GET["cvv"];
$username = $_GET["username"];
$password = $_GET["password"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$address = $_GET["address"];
$address2 = $_GET["address2"];
$county = $_GET["county"];
$country = $_GET["country"];
$zip = $_GET["zip"];

//When you will get the post variable then you need to write the following SQL command.

$sql = "INSERT INTO `payment` (`Type of Card`, `Name on Card`, `Card Number`, `Expiration`, `CVV`,`Username`, `Password`, `First Name`, 
`Last Name`, `Email`, `Address`, `Address2`, `County`, `Country`, `Eircode`) 
VALUES ('$cardtype','$nameoncard', '$cardnumber', '$exp', '$cvv','$username', '$password','$firstname','$lastname', '$email', 
'$address', '$address2','$county', '$country','$zip')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Payment details will be processed and we will send an email confirmation";
}

?>

<br><br>
<ul class="navigation">
    <div class="w3-container w3-blue w3-right w3-allerta">
    <p class="w3-xxxlarge" >Links</p><br>

    If you would like to make another booking please follow this link:<br>
    <li><a href="Book.html">Book Here</a></li><br>
    If you would like to learn specfic song please follow this link:<br>
    <li><a href="Songs.html">Request Songs</a></li><br>
    If you would like to pay for your another lesson please follow this link:<br>
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