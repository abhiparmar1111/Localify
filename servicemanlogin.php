<?php
if(isset($_COOKIE['serviceuser'])){
    header("location: servicemanindex.php");
}

$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
$conn = mysqli_connect($host, $username, $password, $database);

if(isset($_COOKIE['serviceuser'])){
    header("location: servicemanindex.php");
}

$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
if(isset($_COOKIE['serviceuser'])){
  header("location: servicemanindex.php");
}

$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
if(isset($_POST["submit"])){
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $conn = mysqli_connect($host, $username, $password, $database);

  // Prepare the statement
  $query = "SELECT * FROM serviceman WHERE ServiceMan_Name = ? AND ServiceMan_password = ?";
  $stmt = mysqli_prepare($conn, $query);

  // Check for statement preparation error
  if (!$stmt) {
      $error = mysqli_error($conn);
      echo "MySQL Error: " . $error;
      exit; // Stop further execution
  }

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, "ss", $user, $pass);

  // Execute the statement
  mysqli_stmt_execute($stmt);

  // Get the result
  $result = mysqli_stmt_get_result($stmt);

  // Check the number of rows
  if(mysqli_num_rows($result) == 1){
      setcookie("serviceuser", $user, time()+864000);
      header("Location: servicemanindex.php");
      exit; // Stop further execution
  }
  else{
      echo "<script>alert('Invalid details')</script>";
  }

  // Close the statement
  mysqli_stmt_close($stmt);
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
      <h2>Service Man Login</h2>
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
        <p>Don't have an account? <a href="servicemancreate.php">Sign up now</a></p>
        <p><a href="login.php">Switch to customer account</a></p>
      </form>
    </div>






    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>