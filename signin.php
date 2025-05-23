<?php
session_start();
require_once"database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user where username='$username'and password = '$password'";
    
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) != 0 ) {
        //echo"Let him enter";
        header("Location: home.php");
        
    }
    else{
        echo "username or password wrong";
    }
}

?>