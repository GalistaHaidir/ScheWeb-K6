<?php
$servername = "localhost";
$database = "db_admin";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("koneksi gagal : " . mysqli_connect_error());
} else{
    echo "koneksi sukses";
}
