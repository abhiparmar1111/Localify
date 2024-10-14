<?php
if(!isset($_COOKIE["user"])){
    header("location: login.php");
}
if(isset($_POST["logout"])){
  setcookie("user", "", time());
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT"
      crossorigin="anonymous"
    />
    <link href="assets/css/userdashboard.css" rel="stylesheet" type="text/css" />
  </head>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
  />
  <style>
    .person-block{
      width: 30%;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#"><h3>Localify</h3></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
        <form method="post">
      <button class="btn btn-outline-alert" type="submit" name="logout">Logout</button>
  </form>
      </div>
    </nav>
    <style>
    .person-block{
      width: 50%;
      margin: 1em auto;
    }

    .person-block div form button{
      margin: 1em 0;
      border-radius: 1em;
      padding: 0.25em 1em;
      font-size: 1.5em;
      transition: all 0.3s ease;
    }

    .person-block div form button:hover{
      color: white;
      background-color: #232323;
    }
  </style>
  
<body>

    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "localify";

    $conn = mysqli_connect($host, $username, $password, $database);
    $query = "SELECT * FROM services WHERE ServiceName = 'AC repair'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        echo '
        <div class="person-block">
        <img src="person-icon.png" alt="Person photo" />
        <div>
            <h2><a href="#">'.$row['ServiceMan_Name'].'</a></h2>
            <p>Occupation: '.$row["ServiceName"].'</p>
            <p>Description: '.$row["Description"].'</p>
            <p>Price: '.$row["Price"].'</p>
            <p>Rating: '.$row["Rating"].'</p>
            <form action="confirmation.php" method="post">
                <button type="submit" name="submit" value="'.$row["Service_ID"].'">Book Now</button>
            </form>
            
        </div>
        </div>
        <hr>
        ';
    }

    ?>
    

    

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
  </body>
</html>
