<?php 
$serverName ='localhost';
$userName = 'root';
$password = '';
$database = 'adamstore';

$conn = mysqli_connect($serverName,$userName,$password,$database);

if(!$conn){
    die("Connection failes".mysqli_connect_error());
}else{
    mysqli_set_charset($conn, "utf8");
}   
?>