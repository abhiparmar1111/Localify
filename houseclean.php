<?php
if(!isset($_COOKIE["user"])){
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="#" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="#" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h4>Dashboard</h4>

    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "localify";

    $conn = mysqli_connect($host, $username, $password, $database);
    $query = "SELECT * FROM services WHERE ServiceName = 'Cleaning'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        echo '
        <div class="person-block">
        <img src="person-icon.png" alt="Person photo" />
        <div>
            <h2><a href="#">'.$row['ServiceMan_Name'].'</a></h2>
            <p>Occupation: '.$row["ServiceName"].'</p>
            <p>Price: '.$row["Price"].'</p>
            <p>Rating: '.$row["Rating"].'</p>
            <form action="confirmation.php" method="post">
                <button type="submit" name="submit" value="'.$row["Service_ID"].'">Book Now</button>
            </form>
            
        </div>
        </div>
        ';
    }

    ?>
    

    

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
  </body>
</html>
