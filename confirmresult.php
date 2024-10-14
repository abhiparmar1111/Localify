<!DOCTYPE html>
<html lang="en">
<head>
    
<script>
    function showAlert() {
      alert("This is an alert pop-up!");
    }
  </script>
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

   {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  .container {
    margin: 30px auto;
  }

  .container .card {
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: #fff;
    border-radius: 0px;
  }

  body {
    background: #eee;
  }

  .btn.btn-primary {
    background-color: #ddd;
    color: black;
    box-shadow: none;
    border: none;
    font-size: 20px;
    width: 100%;
    height: 100%;
  }

  .btn.btn-primary:focus {
    box-shadow: none;
  }

  .container .card .img-box {
    width: 80px;
    height: 50px;
  }

  .container .card img {
    width: 100%;
    object-fit: fill;
  }

  .container .card .number {
    font-size: 24px;
  }

  .container .card-body .btn.btn-primary .fab.fa-cc-paypal {
    font-size: 32px;
    color: #3333f7;
  }

  .fab.fa-cc-amex {
    color: #1c6acf;
    font-size: 32px;
  }

  .fab.fa-cc-mastercard {
    font-size: 32px;
    color: red;
  }

  .fab.fa-cc-discover {
    font-size: 32px;
    color: orange;
  }

  .c-green {
    color: green;
  }

  .box {
    height: 40px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd;
  }

  .btn.btn-primary.payment {
    background-color: #1c6acf;
    color: white;
    border-radius: 0px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px;
  }

  .form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px;
  }

  .form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #dadce0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none;
  }

  .form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868b;
    font-size: 16px;
    transition: 0.3s;
    text-transform: uppercase;
  }

  .form-control:focus + .form__label {
    top: -8px;
    left: 12px;
    color: #1a73e8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
  }

  .form-control:not(:placeholder-shown).form-control:not(:focus)
    + .form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
  }

  .form-control:focus {
    border: 1.5px solid #1a73e8;
    box-shadow: none;
  }
</style>
<link
  rel="stylesheet"
  href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
/>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
/>
    </head>
    <body>
    
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";

$conn = mysqli_connect($host, $username, $password, $database);

$service_id = $_POST["submit"];
$query = "SELECT * FROM services WHERE Service_ID = $service_id";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$serviceman_id = $row["ServiceMan_ID"];
$ServiceMan_name = $row["ServiceMan_Name"];
$cus_name = $_COOKIE["user"];
$service_name = $row["ServiceName"];
$rate = $row["Price"];
$status = 0;

$query = "INSERT INTO job (ServiceMan_ID, Service_ID, ServiceMan_name, Cus_Name, Service_Name, Rate, Status) VALUES($serviceman_id, $service_id, '$ServiceMan_name', '$cus_name', '$service_name', $rate, $status)";

$result = mysqli_query($conn, $query);


?>


<div class="container">
  <div class="row">
    <div class="col-lg-4 mb-lg-0 mb-3">
      <div class="card p-3">
        <div class="img-box">
          <img
            src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png"
            alt=""
          />
        </div>
        <div class="number">
          <label class="fw-bold" for="">**** **** **** 1060</label>
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <small
            ><span class="fw-bold">Expiry date:</span><span>10/16</span></small
          >
          <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-lg-0 mb-3">
      <div class="card p-3">
        <div class="img-box">
          <img
            src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
            alt=""
          />
        </div>
        <div class="number">
          <label class="fw-bold">**** **** **** 1060</label>
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <small
            ><span class="fw-bold">Expiry date:</span><span>10/16</span></small
          >
          <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-lg-0 mb-3">
      <div class="card p-3">
        <div class="img-box">
          <img
            src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
            alt=""
          />
        </div>
        <div class="number">
          <label class="fw-bold">**** **** **** 1060</label>
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <small
            ><span class="fw-bold">Expiry date:</span><span>10/16</span></small
          >
          <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
        </div>
      </div>
    </div>
    <div class="col-12 mt-4">
      <div class="card p-3">
        <p class="mb-0 fw-bold h4">Payment Methods</p>
      </div>
    </div>
    <div class="col-12">
      <div class="card p-3">
        <div class="card-body border p-0">
          <p>
            <a
              class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
              data-bs-toggle="collapse"
              href="#collapseExample"
              role="button"
              aria-expanded="true"
              aria-controls="collapseExample"
            >
              <span class="fw-bold">BHIM/UPI</span>
              <span class="fab fa-cc-paypal"> </span>
            </a>
          </p>
          <div class="col-12">
            <div class="form__div">
              <input type="text" class="form-control" placeholder=" " />
              <label for="" class="form__label">Enter UPI number here</label>
            </div>
          </div>
          <div class="collapse p-3 pt-0" id="collapseExample">
            <div class="row">
              <div class="col-8">
                <p class="h4 mb-0">Summary</p>
                <p class="mb-0">
                  <span class="fw-bold">Product:</span
                  ><span class="c-green">: Name of product</span>
                </p>
                <p class="mb-0">
                  <span class="fw-bold">Price:</span
                  ><span class="c-green">:XXXX</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body border p-0">
          <p>
            <a
              class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
              data-bs-toggle="collapse"
              href="#collapseExample"
              role="button"
              aria-expanded="true"
              aria-controls="collapseExample"
            >
              <span class="fw-bold">Credit Card</span>
              <span class="">
                <span class="fab fa-cc-amex"></span>
                <span class="fab fa-cc-mastercard"></span>
                <span class="fab fa-cc-discover"></span>
              </span>
            </a>
          </p>
          <div class="collapse show p-3 pt-0" id="collapseExample">
            <div class="row">
              <div class="col-lg-5 mb-lg-0 mb-3">
                <p class="h4 mb-0">Summary</p>
                <p class="mb-0">
                  <span class="fw-bold">Product:</span
                  ><span class="c-green">: Name of product</span>
                </p>
                <p class="mb-0">
                  <span class="fw-bold">Price:</span>
                  <span class="c-green">:xxxx</span>
                </p>
              </div>
              <div class="col-lg-7">
                <form action="" class="form">
                  <div class="row">
                    <div class="col-12">
                      <div class="form__div">
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" "
                        />
                        <label for="" class="form__label">Card Number</label>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form__div">
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" "
                        />
                        <label for="" class="form__label">MM / yy</label>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form__div">
                        <input
                          type="password"
                          class="form-control"
                          placeholder=" "
                        />
                        <label for="" class="form__label">cvv code</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form__div">
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" "
                        />
                        <label for="" class="form__label"
                          >name on the card</label
                        >
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="btn btn-primary w-100">Sumbit</div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
     <a href="index.php" div class="btn btn-primary payment"  onclick="myFunction()" >Make Payment</div></a>
      

<script>
function myFunction() {
  alert("Payment succesful !");    
}
</script>

    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>
</body>
</html>