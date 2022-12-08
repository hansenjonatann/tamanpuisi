<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "tamanpuisi";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn) {
    die("<script>alert('Database gagal terhubung!')</script>");
}

?>