<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM regis
          WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0) {
    header("Location: formpeserta.php");
}else {
    echo "Username dan Password Anda Salah, Silahkan Coba Login Kembali <button><a href='login.html'>Login</a></button> ";
}
?>