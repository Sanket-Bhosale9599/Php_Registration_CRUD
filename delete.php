<?php

require 'database.php';
$userid;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $userid = $_GET["Id"];
}


$sql = "DELETE FROM user WHERE Id='$userid'";
if ($conn->query($sql)) {
    header("Location: ShowDatabase.php");
}
?>