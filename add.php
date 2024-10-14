<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "localify";
$conn = mysqli_connect($host, $username, $password, $database);

$ServiceName = $_POST["ServiceName"];
$price = $_POST["price"];
$mobile = $_POST["mobile"];
$ServiceMan_ID = $_POST["ServiceMan_ID"];
$ServiceMan_Name = $_POST["ServiceMan_Name"];
$desp = $_POST["desp"];

$query = "INSERT INTO services(ServiceMan_ID, ServiceName, ServiceMan_Name, Price, Mobile, Description) VALUES (".$ServiceMan_ID.", '".$ServiceName."', '".$ServiceMan_Name."', ".$price.", '".$mobile."','".$desp."')";
$result = mysqli_query($conn, $query);

header("Location: servicemanindex.php");
?>
