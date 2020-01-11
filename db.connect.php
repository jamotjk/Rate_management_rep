<?php 

//$conn=mysqli_connect(":3306","jamotjk","11jamot");
//mysqli_select_db($conn,"rate_database");



$servername = "db4free.net:3306";
$username = "jamotjk";
$password = "11jamot_11";
$dbname="rate_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

 ?>