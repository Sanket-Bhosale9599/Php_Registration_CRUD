<?php
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $address = $_POST["useraddress"];
    $userId = $_POST["userId"];

}


$sql = "UPDATE user SET userName='$name', userEmail='$email', userAddress='$address', userPassword='$password' WHERE Id='$userId'";

if ($conn->query($sql) === TRUE) {
    header("Location: ShowDatabase.php");
} else {
    echo "entry not done";
}




?>