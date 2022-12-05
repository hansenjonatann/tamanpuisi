<?php
$koneksi = mysqli_connect("localhost", "root", "", "tamanpuisi_kirim");


$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$title = $_POST['title'];
$category = $_POST['category'];
$contents = $_POST['contents'];
$submit = $_POST['submit'];


$query = "INSERT INTO kirimpuisi_db VALUES('$username','$email','$phonenumber','$title','$category','$contents','$submit')";

mysqli_query($koneksi, $query);
?>