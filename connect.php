<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "epidemic_management";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Error in connecting ". mysqli_connect_error);
}
else {
  //echo "connected";
}




 ?>
