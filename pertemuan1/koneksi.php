<?php 

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'db_Pengiriman';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die('Connection Failed:' . mysqli_connect_error());
}
 ?>
