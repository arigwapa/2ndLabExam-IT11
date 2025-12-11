<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "2ndlabexam_bartiquien";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
