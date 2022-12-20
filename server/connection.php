<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'golekkonco';

$conn = mysqli_connect($server, $user, $password, $dbName);

if (!$conn) {
    die('Gagal terhubung ke database' . mysqli_connect_errno());
} 
?>