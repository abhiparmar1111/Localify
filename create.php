<?php

// Check if the user is already logged in with a cookie
if (isset($_COOKIE['user'])) {
    header("Location: index.php");
    exit(); // Add an exit statement to prevent further execution
}

$host = "localhost";
$username = "root";
$password = "";
$database = "localify";

if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $pass = $_POST["password"];
    $confirmpass = $_POST["confirm_password"];
    
    if ($pass == $confirmpass){
        $conn = mysqli_connect($host, $username, $password, $database);

        // Escape user input to prevent SQL injection

        $query = "SELECT * FROM `customer` WHERE `Cus_Name` = '".$user."'";
        $result = mysqli_query($conn, $query);
        echo "1";
        if(mysqli_num_rows($result) == 0){
            $query = "INSERT INTO `customer`(`Cus_Name`, `Cus_Password`) VALUES('".$user."','".$pass."')";
            $result = mysqli_query($conn, $query);
            setcookie("user", $user, time() + 86400); // Adjusted expiration time
            header('Location: index.php');
        }
        else{
            echo "5";
            echo "<script>alert('User already exists')</script>";
        }
    }
    else{

        echo "6";
        echo "<script>alert('Passwords must match')</script>";
    }
}
?>

<!-- Add the HTML form here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/create.css">
<body>

<div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form method="post">
            <div class="form-group ">
                <label>User</label>
                <input type="text" name="user" class="form-control">
            </div>    
            <div class="form-group ">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
            <p><a href="servicemanlogin.php">Switch to serviceman account</a></p>
        </form>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>