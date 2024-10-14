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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
  <style> 
      .d-block{
      width:80px;
      margin:10px;
      }
      .d-flex{
      width:600px;
      margin-left:200px;
      }
      .ls{
      width:1000px;
      height:400px;
      padding-left:400px;
      margin-left:50px;
      border-top:10px;
      border-left:10px;
      } 
      .col-md-6 {
      flex: 0 0 auto;
      width: 600px;
      }
      .card{}
      .logo{

      margin-left:300px;
      }
    button{
      border:hidden;
      margin-top:8px;
      margin-left:5px;
    }

    .image{
      text-align: center;
      width: 100%;
      overflow: hidden;
      aspect-ratio: 4/3;
    }

    .image img{
      height: 100%;
    }

    footer{
      background-color: #545454;
      color: white;
      width: 100%;
      margin:0;
      padding: 3em 0;
      text-align: center;
    }

        
  </style>  

</head>  
      

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <img src="image1.png" style="height:50px;margin-right:2px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="joinus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  
  <div>
    <form method="post">
      <button class="btn btn-outline-alert" type="submit" name="logout">Logout</button>
    </form>
  </div>
  </div>
</nav>
<div class="ls">
 <img class="logo" src="2.png" >
 <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search for services" aria-label="Search">
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
</div>

<h2 style="text-align:center">Best Offers</h2>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="haircut_img.jpg" alt="imgg">  </div>
          <div class="card-body text-center">
              <h5 class="card-text">Haircut</h5>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'haircut.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="repairs.png" alt="imgg">  </div>
          <div class="card-body text-center">
              <h5 class="card-text">AC repair</h5>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'acrepair.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="img4.jpeg" alt="imgg">  </div>
          <div class="card-body text-center">
              <h5 class="card-text">Home cleaning</h5>          
      
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'HomeCleaning.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="homepaint.jpg" alt="imgg">  </div>
          <div class="card-body text-center">
          <h5 class="card-text">Home Painting</h5>
            
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'HomePainting.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="carpenter.jpg" alt="imgg">  </div>
          <div class="card-body text-center">
          <h5 class="card-text">Carpenter</h5>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'carpenter.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="plumber.jpeg" alt="imgg">  </div>
          <div class="card-body text-center">
          <h5 class="card-text">Plumber</h5>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'plumber.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <div class="image"><img src="electrician.webp" alt="imgg">  </div>
          <div class="card-body text-center">
          <h5 class="card-text">Electrician</h5>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href = 'electrician.php'">Book now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
  </div>
<footer >
  <span ><img src="image1.png" style="height:50px;align:left;margin-bottom:5px;">
  <p>© 2022-2023 Localify, Inc. •&nbsp;<a href="#">Privacy</a>•<a href="#">Terms</p>
</span>
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html> 