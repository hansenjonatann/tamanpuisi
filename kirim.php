<?php 

    require 'config.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $submit = $_POST['submit'];
    
    mysqli_query($conn, "INSERT INTO kirimpuisi VALUES('$nama','$email','$hp','$judul','$kategori','$isi','$submit')")

?>