<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-logic";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['phone'])) {
    $inputPhone = mysqli_real_escape_string($conn, $_POST['phone']);
    $sql = "SELECT phone_number FROM users WHERE phone_number = '$inputPhone'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Phone number already exists";
    } else {
        echo "";
    }
}
$conn->close();
?>