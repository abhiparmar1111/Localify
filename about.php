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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <link href="assets/css/userdashboard.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/carousel.css" rel="stylesheet" type="text/css" />
<style>
    .aboutus , .who_are_we{
        
    }
    .container-fluid{
   
    }
    </style>

  </head>
  <link rel="stylesheet" href="https://classless.de/classless.css">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
  />
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

    body      {
      margin:auto;
      

    }
    .aboutus{
      margin-bottom:30px;
      font-family:  Arial, sans-serif ;
      margin-top:1em;
      background-color: #ededed;
      border:2em;
      text-align:center;
      font-size:20px;
    }
    .profile-img{
      width: 100px; 
      height: 100px; 
      border-radius: 50%; 
      overflow: hidden; 
    }
  .profile-imgage img{
    width: 100%; 
      height: 100%; 
      object-fit: cover;
  }
  .img{
    aspect-ratio:4/3;
    
  }
  .pclass{
    font-size:18px;
  }
  .members{
    padding:2em;
  }
  h3{
    margin-top:10%;
    font-family: emoji;
    font-size: 1.75rem;
    font-weight: 540;
  }
  a{
    color:deeppink;
    
  }
  a:hover{
  color:#F58529;
  }
  .joinus{
    padding-bottom:1em;
  }
  
    </style>
  


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
          <a class="nav-link" href="#">Contact Us</a>
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
<div class="aboutus">
  <h2>Who are we</h2>
  <p>Localify is a technology platform offering a variety of services at home. Customers use our platform to book services such as  haircuts,  cleaning, plumbing, carpentry, appliance repair, painting etc. These services are delivered in the comfort of their home and at a time of their choosing. We promise our customers a high quality, standardised and reliable service experience. To fulfill this promise, we work closely with our hand-picked service partners, enabling them with technology, training, products, tools, financing, insurance and brand, helping them succeed and deliver on this promise. </p>
 <div>
    <h2>Our Team</h2>
      <div class="members">
        <div class=profile-imgage>
        <img src="abhi.jpg"></img>
      </div>
      <h3>Abhayrajsinh Parmar</h3>
      <p class="pclass">CEO & CO-founder, Localify.</p>
        <a href="https://www.instagram.com/abhayrajparmar_008/#">Instagram</a>
        </div>
        <hr>
        <div class="members">
        <div class=profile-imgage>
        <img src="yogi.jpg"></img>
        <h3>Yogirajsinh Parmar</h3>
        <p class="pclass">CEO & CO-founder, Localify.</p>
        <a href="https://www.instagram.com/yogirajsinh._.10/#">Instagram</a>
        </div>
      </div>
      <hr>  
      <div class="joinus">
      <button onclick="location.href = 'joinus.php'">Join Us  </button>
      </div>
  </div>  
</div>
  
</body>