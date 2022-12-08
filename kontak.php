<?php 

    require 'config.php';

    $namapengguna = $_POST['namapengguna'];
    $email = $_POST['email'];
    $notelepon = $_POST['notelepon'];
    $pesan = $_POST['pesan'];
    $submit = $_POST['submit'];

    mysqli_query($conn, "INSERT INTO kontakkami VALUES('$namapengguna','$email','$notelepon','$pesan','$submit')");

?>