<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $inputUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT password FROM users WHERE username = '$inputUsername'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($inputPassword, $row['password'])) {
            echo "Valid password";
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username";
    }
}
$conn->close();
?>