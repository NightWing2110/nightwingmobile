<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shopdienthoai";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Connect failed";
}
?>