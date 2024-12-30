<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['email'])) {
    $inputEmail = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "SELECT mail_id FROM users WHERE mail_id = '$inputEmail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Email already registered";
    } else {
        echo "";
    }
}
$conn->close();
?>
