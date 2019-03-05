<?php
//try{ throw new Exception();
//}catch(Exception $e) {
//var_dump(debug_backtrace());
//}
$servername = "localhost";
$username = "root";
$password = "";//orignal password labyrinth@123
$dbname = "hack";

date_default_timezone_set('Asia/kolkata');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3306);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




?>
