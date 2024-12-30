<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $inputUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $sql = "SELECT username FROM users WHERE username = '$inputUsername'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Valid username";
    } else {
        echo "Invalid username";
    }
}
$conn->close();
?>