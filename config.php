
<?php
$servername = "dpg-cvmj0e7fte5s738qqmj0-a";
$username = "tangir";
$password = "C42bkoHPWYYeAupVdXwWA4gmK4ycUbOT";
$dbname = "login_0y6d";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected!";
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
