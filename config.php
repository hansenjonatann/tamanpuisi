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

function register($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $cpassword = mysqli_real_escape_string($conn, $data["cpassword"]);

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
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");



        return mysqli_affected_rows($conn);
}

    function logout($data)
    {
        session_destroy();
        header("location: login.php");
    }


    function cari($keyword) {
        $query = "SELECT * FROM kirimpuisi WHERE nama LIKE '%$keyword%' OR judul LIKE '%$keyword%'  ";
        return query($query);
    }

?>