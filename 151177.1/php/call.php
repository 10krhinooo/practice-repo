<?php
require_once "database.php";

$username = $_POST["userName"];
$email = $_POST["userEmail"];
$password = $_POST["userPassword"];
$confirmPass = $_POST["confPassword"];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email address";
    exit();
}

if(strcmp($password, $confirmPass) !== 0){
    echo "Passwords do not match";
    exit();
}

$hashedPass = password_hash($password, PASSWORD_DEFAULT);

$insert_data = "INSERT INTO credentials (userName, userEmail, userPassword) VALUES ('$username', '$email', '$hashedPass')";

if($conn->query($insert_data) === TRUE){
    header("Location: ../signUp.html");
    exit();
}
else{
    // Log the error for debugging purposes
    error_log("Database error: " . $conn->error);
    // Display a generic error message
    echo "Oops! Something went wrong. Please try again later.";
    exit();
}
?>
