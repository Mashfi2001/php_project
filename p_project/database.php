<?php
$host = 'localhost';
$dbname = 'store';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password);

if($conn->connect_error){
    die("connection failed: " . $conn->connet_error);
    }
else{
    mysqli_select_db($conn, $dbname);
    echo "";
}
?>