<?php
//database details
//Configure your server here!
$server = "localhost";
$username = "<ukusername>";
$password = "<ukpassword>";
$database = "<ukdbname>";

//version control - sometimes the "css/js" files gets cached in the user browser
//to solve this problem we use versions, everytime you edit the css or js make sure to increase "version"
//please only use integers.

$version = 1;

//Try to connect and save it to a variable "connection"
$connection = mysqli_connect($server, $username, $password, $database);

//You can delete those if you don't care in supporting languages like "Arabic","German"
mysqli_query($connection,"SET NAMES utf8;") or die;
mysqli_query($connection,"SET CHARACTER SET utf8;") or die;
mysqli_set_charset($connection, 'utf8');

//if the app didn't work, please make sure that you are connected correctly to the DB.
if(!$connection) die;


$fullname = $_POST['fullname'];
$company = $_POST['company'];
$jobrole = $_POST['jobrole'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$pageid = $_POST['pageid'];
$emailopt = $_POST['emailopt'];
$telopt = $_POST['telopt'];
$postopt = $_POST['postopt'];

// update database.

$ask = "INSERT INTO DownloadSubmission SET
fullname = '$fullname',
company = '$company',
jobrole = '$jobrole',
email = '$email',
telephone = '$telephone',
emailopt = '$emailopt',
telopt = '$telopt',
postopt = '$postopt',
ContentHubPageID = '$pageid'";
$result = mysqli_query($connection,$ask);


//$to = $colleagueEmail;
//$subject = "AdvantageGo";
//$txt = "Dear $colleagueName.\n\nI thought you may like to look at the software services from AdvantageGo. Visit http://www.advantagego.com to find out more.\n\nRegards.\n$name";
//$headers = "From: no-reply@advantagego.com";
//mail($to,$subject,$txt,$headers);

?>
