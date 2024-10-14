<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
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
<form method="post">
            <div class="form-group ">
               <h3>Youe payment is succesful</h3> 
         </div>    
            <div class="form-group ">
               </div>
            <div class="form-group ">
                  </div>
           
             </form>






  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>