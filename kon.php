<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "innerjoin";


$kon   = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno($kon)) {
   //this for show failed

   echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
