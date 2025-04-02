
<?php
$servername = "dpg-cvmj0e7fte5s738qqmj0-a";
$username = "tangir";
$password = "C42bkoHPWYYeAupVdXwWA4gmK4ycUbOT";
$dbname = "login_0y6d";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
