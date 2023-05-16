<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO regis (username,email,password) VALUES ('$username','$email','$password')";

if (mysqli_query($con, $query)) {
    header("Location: login.html");
}else {
    echo "Pendaftaran Gagal : ".mysqli_error($con);
}
?>