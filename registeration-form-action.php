<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $security_pin = $_POST['security_pin'];
    if ($_POST['password'] !== $_POST['confirm_password']) {
        die("Passwords do not match.");
    }
    $stmt = $conn->prepare("INSERT INTO users (name, date_of_birth, gender, phone_number, mail_id, username, password, security_pin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $dob, $gender, $phone, $mail, $username, $password, $security_pin);
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>