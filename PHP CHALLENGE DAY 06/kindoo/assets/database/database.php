<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kindoo";

$conn = mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed");
}

?>