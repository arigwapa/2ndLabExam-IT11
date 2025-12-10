<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, username, password) 
            VALUES ('$name', '$username', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.html");
        exit();
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>