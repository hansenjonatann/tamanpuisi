<?php 

    require 'config.php';

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $submit = $_POST['submit'];
    
    mysqli_query($conn, "INSERT INTO kirimpuisi VALUES('','$nama','$email','$hp','$judul','$kategori','$isi','$submit')");

    if(isset($_POST["submit"])) {
        echo "<script>
            alert('Silahkan Login terlebih dahulu');
            window.location.href = 'login.php';
        </script>";
        header("location: kategori.php");
    } else {
        echo mysqli_error($conn);
    }
?>