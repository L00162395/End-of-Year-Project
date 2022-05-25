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

<?php if(isset($_GET['artistname'])): ?>
    Your Artist is <?php echo $_GET["artistname"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['songname'])): ?>
    Your Song is <?php echo $_GET["songname"]; ?>
<?php endif; ?> <br>

<?php if(isset($_GET['style'])): ?>
    Your Genre of choice is <?php echo $_GET["style"]; ?>
<?php endif; ?> <br>

<br>

<?php

$con = mysqli_connect("localhost","root","26august","mydatabase");
//You need to place value for your localhost username and password. Normally localhost MySQL database username is root and password blank or root. 
//For example, the code is as below
$con = mysqli_connect('localhost', 'root', '26august','mydatabase');
//The “db_contact” is our database name that we created before.
//After connection database you need to take post variable from the form. See the below code

$artistname = $_GET["artistname"];
$songname = $_GET["songname"];
$style = $_GET["style"];
//When you will get the post variable then you need to write the following SQL command.

$sql = "INSERT INTO `song` (`Artist`, `Song`, `Genre`) VALUES ( '$artistname','$songname', '$style')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Song Choice has been saved";
}

?>

<br><br>
<ul class="navigation">
    <div class="w3-container w3-blue w3-right w3-allerta">
    <p class="w3-xxxlarge" >Links</p><br>

    If you would like to make a booking please follow this link:<br>
    <br><li><a href="Book.html">Book Here</a></li><br>
    If you would like to learn another specfic song please follow this link:<br>
    <br><li><a href="Songs.html">Request Songs</a></li><br>
    If you would like to pay for your lesson please follow this link:<br>
    <br><li><a href= "Payment.html">To Payment page</a></li><br>
    If you would like to make inqueries about lessons please feel free to contact us here:<br>
    <br><li><a href="Contact.html">Contact Us</a></li><br>
    Return to Homepage:<br>
    <br><li><a href="Index.html">Home</a></li><br>
    </div>
    </ul>
    </ul>
</ul>
</html>