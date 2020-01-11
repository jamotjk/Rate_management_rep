<?php 

//$conn=mysqli_connect(":3306","jamotjk","11jamot");
//mysqli_select_db($conn,"rate_database");



$conn = new mysqli("db4free.net", "jamotjk", "11jamot11_", "rate_database", 3306);
if ($coon->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

echo $coon->host_info . "\n";
 ?>