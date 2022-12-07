<?php

$conn = mysqli_connect("127.0.0.1", "root", "","kirimpuisi");


$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$judul = $_POST["judul"];
$kategori = $_POST["kategori"];
$isi = $_POST["isi"];
$submit = $_POST["submit"];

$sql = "INSERT INTO kirimpuisi_table VALUES('$nama_lengkap','$email','$phone','$judul','$kategori','$isi','$submit')";


mysqli_query($conn, $sql);

?>