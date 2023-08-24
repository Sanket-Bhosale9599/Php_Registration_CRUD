<?php

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbaname = "new_registration";

$conn = new mysqli($servername, $username, $dbpassword, $dbaname);

if ($conn->connect_error) {
   echo "unsuccessfull connection from database.php";

}

?>