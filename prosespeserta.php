<?php 
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['submit'])) {
        $jenpend = $_POST['jenpend'];
        $tglmsksklh = $_POST['tglmsksklh'];
        $nis = $_POST['nis'];
        $nopeujian= $_POST['nopeujian'];
        $paud = $_POST['paud'];
        $tk = $_POST['tk'];
        $noserskhun = $_POST['noserskhun'];
        $noserijazah = $_POST['noserijazah'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cita'];

      // Menyimpan ke database
      $sql = mysqli_query($con, "INSERT INTO peserta (jenpend, tglmsksklh, nis, nopeujian,paud, tk, noserskhun, noserijazah, hobi, cita)
                                 VALUES ('$jenpend', '$tglmsksklh', '$nis', '$nopeujian', '$paud', '$tk', '$noserskhun', '$noserijazah', '$hobi', '$cita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Saatnya Mengisi Form Data Pribadi!'); window.location.href='formdiri.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Peserta Didik Gagal Ditambahkan!!');";
        }
      }
?>