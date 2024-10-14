<?php
if(isset($_COOKIE['user'])){
    header("Location: index.php");
    exit();
}
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $conn = mysqli_connect($host, $username, $password, $database);
    $query = "SELECT * FROM customer WHERE Cus_Name = '".$user."' AND Cus_Password = '".$pass."'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        
        setcookie("user",$user,time()+864000);
        header("Location: index.php");
    }
    else{
        echo "<script>alert('invalid details')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"
    />
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/login.css">
<body>


<div class="wrapper">
      <h2>Login</h2>
      <p>Please fill in your credentials to login.</p>

      <form action="" method="post">
        
          <div class="innerbox">
            <div class="form-group">
              <label>Username</label>
              <input class="input input-text" type="text" name="username" class="form-control" />
              <!-- <span class="help-block">
                            <?php echo $email_err; ?>
                        </span> -->
            </div>

            <div
              class="form-group"
            >
              <label>Password</label>
              <input class="input input-pass" type="password" name="password" class="form-control" />
            </div>
          </div>
      

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" n />
        </div>
        <p>Don't have an account? <a href="create.php">Sign up now</a></p>
        <p><a href="servicemanlogin.php">Switch to serviceman account</a></p>
      </form>
    </div>






    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>