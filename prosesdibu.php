<?php 
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendibu = $_POST['pendibu'];
        $kerjaibu = $_POST['kerjaibu'];
        $gajibu = $_POST['gajibu'];
        $kebuibu = $_POST['kebuibu'];

      // Menyimpan ke database
      $sql = mysqli_query($con, "INSERT INTO dataibukandung (namaibu, tlibu, pendibu, kerjaibu, gajibu, kebuibu)
                                  VALUES ('$namaibu', '$tlibu', '$pendibu', '$kerjaibu', '$gajibu', '$kebuibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Semua Data Berhasil Disimpan!'); window.location.href='tampiltgs.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>