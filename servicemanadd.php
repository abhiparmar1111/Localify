<?php
 if(!isset($_COOKIE["serviceuser"])){
     header("Location: servicelogin.php");
}

if(isset($_POST["logout"])){
    setcookie("serviceuser","",time());
    header("Location: servicemanlogin.php");
}

if(isset($_POST["complete"])){
    $host = "localhost";
$username = "root";
$password = "";
$database = "localify";
$conn = mysqli_connect($host, $username, $password, $database);
$query = "UPDATE job SET Status = 'complete' WHERE job_ID = " . $_POST['complete'];
$result  = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <style>
        .w-100{
      position: relative;
      width:65%;
      height: 450px ;
      margin: 25px 25px;
      padding: top 10px;
        }
        .details{
          font-size:18px;
        }
      .job {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        width: 100%;
        justify-content: space-around;
      }

      .job h3 {
          margin: 0;
          font-size: 18px;
          margin-bottom: 10px;
      }

      .job {
          border: 1px solid #ddd;
          padding: 10px;
          margin-bottom: 10px;
          background-color: #f9f9f9;
      }
      .job p {
          margin: 5px 0;
      }
    
        </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/index.css">
<style>
  .form{
    width: 50%;
    border: 0.5px solid green;
    border-radius: 2em;
    padding: 2em;
    margin: 1em auto;
  }

  button{
    margin-block: 1em;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Localify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="servicemanindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Add Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="serviceedit.php">Edit Service</a>
        </li>
      </ul>
    </div>
  </div>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" method="post">
      <button class="btn btn-outline-danger" type="submit" name="logout" value="logout">Logout</button>
    </form>
  </div>
</nav>
</nav>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
$conn = mysqli_connect($host, $username, $password, $database);
$query = "SELECT * FROM serviceman WHERE ServiceMan_Name = '".$_COOKIE["serviceuser"]."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$serviceman_id = $row["ServiceMan_ID"];
?>
<form class="form" action="add.php" method="post">
    <div class="lbl-input"><label for="servicename">Service Name: </label><select class="form-control" name="ServiceName" id="servicename">
  <option value="" disabled selected>--SELECT SERVICE--</option>
  <option value="Cleaning">Home Cleaning</option>
  <option value="Haircut">Haircut</option>
  <option value="AC Repair">AC Repair</option>
  <option value="Home Painting">Home Painting</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Plumber">Plumber</option>
  <option value="Electrician">Electrician</option>
</select></div>
    <div class="lbl-input"><label for="price">Price: </label><input class="form-control" type="number" name="price" id="price"></div>
    <div class="lbl-input"><label for="mobile">Mobile: </label><input class="form-control" type="text" name="mobile" id="mobile"></div>
    <div class="lbl-input"><label for="desp">Description: </label><textarea class="form-control" name="desp" id="desp"></textarea></div>
    <input type="hidden" name="ServiceMan_ID" value="<?php echo $serviceman_id; ?>">
    <input type="hidden" name="ServiceMan_Name" value="<?php echo $_COOKIE["serviceuser"] ?>">
    <div class="lbl-input"><button  class="btn btn-success" type="submit">Submit</button></div>
</form>



</body>
</html>