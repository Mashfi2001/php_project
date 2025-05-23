<?php
require_once"database.php"; //intialize database

if (isset($_POST['username']) && isset($_POST['password'])) {  //checks password and username was given
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user where username='$username'and password = '$password'"; //sql code for retriveing data
    
    $result = mysqli_query($conn,$sql); //runs sql quary

    if (mysqli_num_rows($result) != 0 ) { //check if the retrived data is empty
        //echo"Let him enter";
        header("Location: home.php"); // redirects to home page
        
    }
    else{
        echo "username or password wrong";
    }
}

?>
