<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Provider Information</title>
    <link rel="stylesheet" href="assets/css/confirm.css">
    <script>
    function  confirm() {
      alert("Thank You for your response");
    }
  </script>
  </head>
    <style>
      .details{
        width: 50%;
      }
    </style>
  <body>
    <div class="container">
      <div class="service-provider">
      <img src="person-icon.png"/>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "localify";
    
        $conn = mysqli_connect($host, $username, $password, $database);
        $service_id = $_POST["submit"];

        $query = "SELECT * FROM services WHERE Service_ID = $service_id";
        $result = mysqli_query($conn,$query);

        $row = mysqli_fetch_assoc($result);
        
        echo '
        
        <div class="details">
          <h2 style="text-decoration:underline">'.$row["ServiceMan_Name"].'</h2>
          <p style="font-weight:bold;">'.$row["ServiceName"].'</p>
          <p>Description: '.$row["Description"].'</p>
          <p>Phone: '.$row["mobile"].'</p>
          <p>Price: '.$row["Price"].'</p>
          <p>Rating: '.$row["Rating"].'</p>
        </div>
        </div>
      <form action="confirmresult.php" method="post">
      <div class="confirm-section">
      <button id="confirm-button" name="submit" value="'.$row["Service_ID"].'">Confirm</button>
    </div>
      </form>
      
    </div>
        '

        ?>
        
        
    <!-- JavaScript code to handle confirmation -->
    <script>
      const confirmCheckbox = document.getElementById("confirm-checkbox");
      const confirmButton = document.getElementById("confirm-button");

      confirmButton.addEventListener("click", () => {
        if (confirmCheckbox.checked) {
          // Perform the necessary action when the service is confirmed
          alert("Service provider confirmed!");
        } else {
          alert("Please confirm that you want to hire this service provider.");
        }
      });
    </script>
  </body>
</html>
