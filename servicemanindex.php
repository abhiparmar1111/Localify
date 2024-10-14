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
    $query = "UPDATE job SET Status = 1 WHERE job_ID = ".$_POST["complete"];
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
body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .container {
        display: flex;
        gap: 20px;
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
      }

      /* Header */
      header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        background-color: #333;
        color: #fff;
      }

      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      nav ul li {
        display: inline-block;
        margin-right: 10px;
      }

      nav ul li a {
        color: #fff;
        text-decoration: none;
      }

      /* Sidebar */
      aside {
        width: 300px;
      }

      .profile {
        text-align: center;
        margin-bottom: 20px;
      }

      .profile-image {
        width: 100px;
        height: 100px;
        background-color: #ccc;
        margin: 0 auto 10px;
        border-radius: 50%;
      }

      .sidebar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .sidebar ul li {
        margin-bottom: 10px;
      }

      .sidebar ul li a {
        color: #333;
        text-decoration: none;
      }

      /* Main Content */
      main {
        flex-grow: 1;
      }

      .overview {
        background-color: #f0f0f0;
        padding: 20px;
        margin-bottom: 20px;
      }

      .summary-info {
        display: flex;
        justify-content: space-between;
      }

      .pending-jobs,
      .completed-jobs {
        text-align: center;
      }

      .job-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .job-item {
        background-color: #f0f0f0;
        padding: 10px;
        margin-bottom: 10px;
      }

      .map,
      .schedule,
      .communication,
      .performance {
        background-color: #f0f0f0;
        padding: 20px;
        margin-bottom: 20px;
      }

      /* Responsive Styles */
      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        aside {
          width: 100%;
          margin-bottom: 20px;
        }

        main {
          width: 100%;
        }
      }
    
      </style>
</head>
<style>
  .job{
    display: flex;
    width: 100%;
    justify-content: space-around;
  }

  .customer-name{
    text-align: center;
    width:25%;
  }

  .service-type{
    text-align: center;
    width: 25%;
  }

  .rate{
    text-align: center;
    width: 20%;
  }

  .complete-btn{
    text-align: center;
     width: 25%;
  }

.profile-image{
  overflow: hidden;
}

  .profile-image img{
    width: 100%;
    
  }



</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/index.css"> -->
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicemanadd.php">Add Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="serviceedit.php">Edit Service</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" method="post">
      <button class="btn btn-outline-danger" type="submit" name="logout" value="logout">Logout</button>
    </form>
  </div>
</nav>

    <div class="container">
      <aside>
      <div class="profile">
          <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "localify";
            $servicemanuser = $_COOKIE["serviceuser"];

            $conn = mysqli_connect($host, $username, $password, $database);

            $query = "SELECT * FROM job WHERE ServiceMan_Name = '".$servicemanuser."' AND Status = 0";
            $result = mysqli_query($conn, $query);
          ?>
          <!-- Serviceman profile information -->
          <div class="profile-image">
            <!-- Profile image -->
            <img src="person-icon.png" alt="">
          </div>
          <h2><?php echo $servicemanuser; ?></h2>
          
        </div>
      </aside>

      <main>
        <section class="overview">
          <div class="summary">
            <h2>Overview</h2>
            <hr>
            <div class="summary-info">
              <div class="pending-jobs">
                <h3>Pending Jobs</h3>
                <p><?php echo mysqli_num_rows($result); ?></p>
              </div>
              <div class="completed-jobs">
                <h3>Completed Jobs</h3>
                <p><?php 
                    $query = "SELECT * FROM job WHERE ServiceMan_Name = '".$servicemanuser."' AND Status = 1";
                    $result = mysqli_query($conn, $query);
                    echo mysqli_num_rows($result); 
                  ?>
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="jobs">
          <h2>Ongoing Jobs</h2>
          <ul class="job-list">
            <li class="job-item">
                  <div class="job">
                      <div class="customer-name"><b>Customer Name</b></div>
                      <div class="service-type"><b>Service Name</b></div>
                      <div class="rate"><b>Rate</b></div>
                      <div class="complete-btn"><b>Complete</b></div>
                  </div>
                  <hr>
            <?php
              $host = "localhost";
              $username = "root";
              $password = "";
              $database = "localify";
              $servicemanuser = $_COOKIE["serviceuser"];

              $conn = mysqli_connect($host, $username, $password, $database);

              $query = "SELECT * FROM job WHERE ServiceMan_Name = '".$servicemanuser."' AND Status = 0";
              $result = mysqli_query($conn, $query);

            
              while($row = mysqli_fetch_assoc($result)){
                  echo '
                  <div class="job">
                      <div class="customer-name">'.$row["Cus_Name"].'</div>
                      <div class="service-type">'.$row["Service_Name"].'</div>
                      <div class="rate">'.$row["Rate"].'</div>
                      <div class="complete-btn">
                          <form method="post">
                              <button class="btn btn-outline-success" name="complete" value="'.$row["job_ID"].'">Job Done</button>
                          </form>
                      </div>
                  </div>
                  <hr>
                  ';
              }
              ?>
            </li>
          </ul>
        </section>

        <h2>Completed jobs</h2>
        <section class="map">
          <!-- Interactive map showing job locations -->
          <div class="job">
              <div class="customer-name"><b>Customer Name</b></div>
              <div class="service-type"><b>Service Name</b></div>
              <div class="rate"><b>Rate</b></div>
          </div>
          <hr>
          
          <?php
              $host = "localhost";
              $username = "root";
              $password = "";
              $database = "localify";
              $servicemanuser = $_COOKIE["serviceuser"];

              $conn = mysqli_connect($host, $username, $password, $database);

              $query = "SELECT * FROM job WHERE ServiceMan_Name = '".$servicemanuser."' AND Status = 1";
              $result = mysqli_query($conn, $query);

              while($row = mysqli_fetch_assoc($result)){
                  echo '
                  <div class="job">
                      <div class="customer-name">'.$row["Cus_Name"].'</div>
                      <div class="service-type">'.$row["Service_Name"].'</div>
                      <div class="rate">'.$row["Rate"].'</div>
                  </div>
                  <hr>
                  ';
              }
              ?>
        </section>
      </main>
    </div>
</body>
</html>