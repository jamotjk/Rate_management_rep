<?php 

//$conn=mysqli_connect(":3306","jamotjk","11jamot");
//mysqli_select_db($conn,"rate_database");



$username =  "jamotjk"; 
$password = "11_jamot_11";
$host = "db4free.net:3306"; 
$dbname = "rate_database";

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

try 
{ 
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
} 
catch(PDOException $ex) 
{ 
    die("Failed to connect to the database: " . $ex->getMessage()); 
} 

 ?>