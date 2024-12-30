<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['securityPin'])) {
    $inputUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $inputSecurityPin = mysqli_real_escape_string($conn, $_POST['securityPin']);
    $sql = "SELECT security_pin FROM users WHERE username = '$inputUsername'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($inputSecurityPin === $row['security_pin']) {
            echo "Valid pin";
        } else {
            echo "Invalid pin";
        }
    } else {
        echo "Username not found";
    }
}
$conn->close();
?>
