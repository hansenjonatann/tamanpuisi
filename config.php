<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "tamanpuisi";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn) {
    die("<script>alert('Database gagal terhubung!')</script>");
}


function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $poetrys = [];
    while($poetry = mysqli_fetch_assoc($result)) {
        $poetrys[] = $poetry;
    }
    return $poetrys;
} 

function upload() {

    global $conn;

        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload

        if($error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
            return false;
        } 
    // cek apakah yang diupload gambar atau bukan
    $extensiGambarValid = ['jpg','jpeg','png'];
    $extensiGambar = explode('.', $namafile);
    $extensiGambar = strtolower(end($extensiGambar));

    if( !in_array($extensiGambar, $extensiGambarValid) ) {

        echo "<script>alert('Yang anda upload bukan gambar!')</script>";
        return false;
    } 

        // cek jika ukurannya terlalu besar
    if($ukuranfile > 1000000) {
        echo "<script>alert('ukuran gambar terlalu besar!')</script>";  
    } else {

    }

    // lolos pengecekan gambar siap diupload
    // generate nama baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= '$extensiGambar';
    move_uploaded_file($tmpName, $namaFileBaru);

        return $namafileBaru;
    }

function register($data) {
    global $conn;


    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);
    $gambar = upload();

    // cek konfirmasi password

    if($password != $cpassword) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //  masukkan ke dalam database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$gambar')");



        return mysqli_affected_rows($conn);
}

    function logout($data)
    {
        session_destroy();
        header("location: login.php");
    }


    function cari($keyword) {
        $query = "SELECT * FROM kirimpuisi WHERE nama LIKE '%$keyword%' OR judul LIKE '%$keyword%' OR kategori LIKE '%$keyword%'";
        return query($query);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        $query = "UPDATE users SET 
                    username = '$username',password = '$password', gambar = '$gambar' WHERE id = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }


    

?>