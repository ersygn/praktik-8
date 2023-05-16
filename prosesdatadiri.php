<?php 
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['submit'])) {
    $namleng = $_POST['namleng'];
    $jkel = $_POST['jkel'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $temlahir = $_POST['temlahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $kebukhusus = $_POST['kebukhusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namdus = $_POST['namdus'];
    $namkel = $_POST['namkel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $ttinggal = $_POST['ttinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kpspkh = $_POST['kpspkh'];
    $nokpspkh = $_POST['nokpspkh'];
    $kwn = $_POST['kwn'];
    $namaneg = $_POST['namaneg'];

      // Menyimpan ke database
      $sql = mysqli_query($con, "INSERT INTO datapribadi (namleng, jkel, nisn, nik, temlahir, tglahir, agama, kebukhusus,alamat, rt, rw,namdus, namkel, kec, kodepos, ttinggal, transport, nohp, notelp, email, kpspkh, nokpspkh, kwn, namaneg) VALUES ('$namleng', '$jkel', '$nisn', '$nik', '$temlahir', '$tglahir', '$agama', '$kebukhusus', '$alamat','$rt', '$rw', '$namdus', '$namkel', '$kec', '$kodepos', '$ttinggal', '$transport', '$nohp', '$notelp','$email', '$kpspkh', '$nokpspkh', '$kwn', '$namaneg')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Saatnya Mengisi Form Data Ayah Kandung!'); window.location.href='formdayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>