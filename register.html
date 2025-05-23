<?php
include("database.php"); // $conn should be defined here
$registrationMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) { // retrives data and make sure register button is pressed
    $username = $_POST["username"]; // storing data in variables
    $phone = $_POST["Phone"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];

    if (empty($username) || empty($phone) || empty($email) || empty($dob) || empty($password)) { // checking that none of the data recived is not null
        $registrationMessage = "<div class='alert alert-danger'>Please fill in all fields.</div>";
    } else {
        //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);// hashes password for client security 
        $sql = "INSERT INTO user (username, Phone, email, dob, password)  
                VALUES ('$username','$phone','$email','$dob','$password')"; // in the $sql use coloumn names from database also ive not included the has function but you can use it if you want
        if (mysqli_query($conn, $sql)) {
            $registrationMessage = "<div class='alert alert-success'>You're registered! Please sign in below.</div>";
        } else {
            $registrationMessage = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GameShop | Register & Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0f0f0f;
            font-family: 'Orbitron', sans-serif;
            color: #f0f0f0;
        }

        .form-box {
            background: #1a1a1a;
            border: 2px solid #00ff99;
            border-radius: 16px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 15px #00ff99;
            max-width: 500px;
            margin: auto;
        }

        h1, h2 {
            color: #00ffcc;
            text-shadow: 0 0 8px #00ffcc;
        }

        .btn-gamer {
            background: linear-gradient(to right, #00ff99, #00ccff);
            border: none;
            color: #000;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-gamer:hover {
            box-shadow: 0 0 15px #00ff99;
            transform: scale(1.05);
        }

        .or {
            text-align: center;
            margin: 30px 0 20px;
            color: #888;
        }

        .form-label {
            color: #ccc;
        }
    </style>
</head>
<body>

<div class="container"> 
    <div class="form-box">
        <h1>website name</h1> <!-- header1 used for website name-->
        <h2>Register</h2>
        <?= $registrationMessage ?>

        <form action="register.php" method="post"> <!-- enter data into the post method and retrives it at the top-->
            <input type="hidden" name="register" value="1">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="Phone">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-gamer w-100">Register</button>
        </form>

        <p class="or">--- Already a gamer? ---</p>

        <h2>Sign In</h2>
        <form action="signin.php" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-gamer w-100">Sign In</button>
        </form>
    </div>
</div>

</body>
</html>
