<!DOCTYPE html>
<html>
<head>
  <title>Join Us Form</title>
  <style>
    /* Basic styling for the form */
    body {
      font-family: Arial, sans-serif;
    }
    
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    
    label, input {
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2 style="text-align:center">Contact Us</h2>
  <form action="#" method="post" style="padding-top:50px;">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>
    
    <label for="resume">Resume:</label>
    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>
