<?php
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$faculitor = $_POST["faculitor"];

$conn = mysqli_connect("localhost","root","","customer") or die("connection failed");
$sql = "INSERT INTO cust_table(First_name,Last_name,Email,Mobile,Faculitor) VALUES('{$firstname}','{$lastname}','{$email}','{$mobile}','{$faculitor}')";
$result = mysqli_query($conn, $sql) or die("Query failed!");
header("location: http://localhost/database%20form/ccc2.php ");
mysqli_close($conn);
?>