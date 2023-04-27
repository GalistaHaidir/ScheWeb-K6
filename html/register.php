<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_admin (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $query_sql)){
    header("Location: index.html");
} else {
    echo "pendaftaran gagal : " . mysqli_error($conn);
}