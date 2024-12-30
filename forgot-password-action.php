<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['securityPin']) && isset($_POST['newPassword'])) {
    $inputUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $inputSecurityPin = mysqli_real_escape_string($conn, $_POST['securityPin']);
    $inputNewPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
    $hashedPassword = password_hash($inputNewPassword, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users WHERE username = '$inputUsername' AND security_pin = '$inputSecurityPin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sqlUpdate = "UPDATE users SET password = '$hashedPassword' WHERE username = '$inputUsername'";
        if ($conn->query($sqlUpdate) === TRUE) {
            echo "Password updated successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Invalid username or security pin";
    }
}
$conn->close();
?>