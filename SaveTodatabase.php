<?php
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $address = $_POST["useraddress"];

}



$sql = "INSERT INTO user(userName,userEmail,userPassword,userAddress) VALUES ('$name','$email','$password','$address')";

if ($conn->query($sql) == "TRUE") {
    echo "successfull entry";
} else {
    echo "entry not done";
}

header("Location: ShowDatabase.php");



























/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_POST["username"];
    $address=$_POST["useraddress"];
    $email= $_POST["useremail"];
    $password= $_POST["userpassword"];
}
echo "Name: " . $name ."<br>";
echo "Address: " . $address."<br>";
echo "User Email: " . $email . "<br>";
echo "User Passsword : ". $password."<br>";

$servername="localhost";
$username="root";
$dbpassword="";
$dbname="new_registration";

$conn = new mysqli($servername,$username,$dbpassword,$dbname);
if($conn->connect_error){
    echo "failed connection";
}else{
    echo "successfully connected";
} 
$sql = "INSERT INTO user(userName,userEmail,userpassword,userAddress) VALUES('$name','$email','$password','$address')";
if($conn->query($sql)===TRUE){
    echo "data entry successfull";
}else{
    echo "data entry not successful";
}

$conn->close();
*/



?>