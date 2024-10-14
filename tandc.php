<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";

if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $pass = $_POST["password"];
    $confirmpass = $_POST["confirm_password"];
    
    if ($pass == $confirmpass){
        $conn = mysqli_connect($host, $username, $password, $database);

        // Escape user input to prevent SQL injection

        $query = "SELECT * FROM `serviceman` WHERE `ServiceMan_Name` = '".$user."'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 0){
            $query = "INSERT INTO `serviceman`(`ServiceMan_Name`, `ServiceMan_password`) VALUES('".$user."','".$pass."')";
            $result = mysqli_query($conn, $query);
            if ($result) {

                setcookie("serviceuser", $user, time() + 86400); // Adjusted expiration time
                header('Location: tandc.php');
                exit(); // Add an exit statement to prevent further execution
            } else {

                echo "<script>alert('Failed to create user')</script>";
            }
        }
        else{
  
            echo "<script>alert('User already exists')</script>";
        }
    }
    else{

        echo "<script>alert('Passwords must match')</script>";
    }
}
?>
<!Doctype html>
<html>
<head>
<style>
  form{
    font-size:30px;
  }
  form button{
    align:center;
  }
  </style>
</head>
<style>
  form button{
    align:center;
  }

  html, body {
  height: 100%;
}

body {
}

form {
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form input{
  padding: 0.25em 1em;
  font-size: 20px;
  margin: 1em 0;
  text-align:center;
}

.section{
  margin: 5em auto;
  width: 80%;
}

.section div{
  width:100%;
  margin: 2em 0;
  font-size: 20px;
  text-align: justify;
}

#tncsubmit{
  padding: 0.25em 1em;
  border-radius: 1em;
  font-size: 1em;
  margin: 1em 0;
}
  </style>
<body>
  <div class="section">
    <form action="" method="post">
      <h2>Enter Personal Details</h2>
      <label for="fullname">Full Name:</label>
      <input type="text" required><br>
      <label for="aadhar" >Aadhar Number:</label>
      <input type="text" placeholder="**** **** ****" required>
<h2>Terms And Conditions</h2>
<div>
Please read these terms and conditions ("Terms") carefully before submitting your job application. By applying for a position with our company and signing a contract for a minimum duration of one year, you are agreeing to comply with these Terms and entering into a legally binding agreement ("Agreement") with our company.
</div>
<div>1. Application Process:
   a. You must provide accurate and complete information in your job application, including your personal details, qualifications, work experience, and any other requested information.
   b. Your application must be submitted within the designated application period specified by our company.
   c. Any false or misleading information provided by you during the application process may result in the rejection of your application or termination of your employment if already hired.
   </div>
   <div>2. Selection Process:
   a. Our company reserves the right to determine the selection criteria for each position and assess applicants accordingly.
   b. The selection process may involve interviews, assessments, background checks, and reference checks.
   c. Our company may use your personal data for recruitment purposes in accordance with our privacy policy.
   </div>
   <div>3. Offer of Employment:
   a. If you are selected for a position, our company will extend a formal offer of employment, specifying the terms and conditions of employment.
   b. The offer will include details regarding compensation, benefits, working hours, responsibilities, and any other relevant information.
   </div>
   <div>4. Minimum 1-Year Contract:
   a. Upon accepting the offer of employment, you agree to enter into a contractual agreement with our company for a minimum duration of one year.
   b. The contract will outline the terms and conditions of your employment, including compensation, benefits, job responsibilities, working hours, termination clauses, and any other relevant provisions.
   c. During the one-year contract period, you are expected to fulfill your employment obligations diligently, professionally, and to the best of your abilities.
   d. Early termination of the contract by either party may be subject to penalties or other consequences as specified in the contract.
   </div>
   <div>5. Probationary Period:
   a. A probationary period may be applicable as per the terms of your employment contract.
   b. During the probationary period, your performance and suitability for the role will be assessed.
   c. Our company reserves the right to extend or terminate your employment based on the outcome of the probationary period.
   </div>
   <div>6. Intellectual Property:
   a. Any intellectual property created by you during your employment with our company shall be the sole property of our company, unless otherwise specified in writing.
   b. You agree not to disclose or use any confidential or proprietary information of our company without proper authorization.
   </div>
   <div>7. Confidentiality:
   a. During and after your employment, you shall maintain the confidentiality of any sensitive or proprietary information obtained in the course of your work.
   b. You shall not disclose such information to any third party without proper authorization, unless required by law.
   </div>
   <div>8. Amendments:
   Our company reserves the right to modify, amend, or update these Terms at any time. Any changes will be communicated to you in writing.
   </div>
   <div>9. Governing Law:
   These Terms and the Agreement shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of [Jurisdiction].
   </div>
   <div>
    10. Any misbehaviour or harreshment may result in leagal action. Which could result in termination of the contract.
  </div>
   <div>By signing the employment contract, you acknowledge that you have read, understood, and agreed to these Terms and Conditions. Failure to comply with these Terms may result in the termination of your employment.</div>
<br>
<div class="button">
   <input id="agree" type="checkbox" name="submit" onclick="toggleSubmit()">I agree
   <br>
   <button id="tncsubmit" type="button" onclick="location.href = 'servicemanindex.php'" disabled>Submit</button>
</div>

</div>
<script>
  function toggleSubmit() {
    var tncagree = document.getElementById('agree');
    var tncsubmit = document.getElementById('tncsubmit');
    
    if (tncagree.checked) {
      tncsubmit.disabled = false;
    } else {
      tncsubmit.disabled = true;
    }
  }
</script>

</body>
</html>