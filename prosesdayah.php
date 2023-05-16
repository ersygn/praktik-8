<?php 
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $tlayah = $_POST['tlayah'];
        $pendayah = $_POST['pendayah'];
        $kerjayah = $_POST['kerjayah'];
        $gajiayah = $_POST['gajiayah'];
        $kebuayah = $_POST['kebuayah'];

      // Menyimpan ke database
      $sql = mysqli_query($con, "INSERT INTO dataayahkandung (namaayah, tlayah, pendayah, kerjayah, gajiayah, kebuayah) VALUES ('$namaayah', '$tlayah', '$pendayah', '$kerjayah', '$gajiayah', '$kebuayah')");

      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Saatnya Mengisi Form Data Ibu Kandung!'); window.location.href='formdibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
        }
      }
?>