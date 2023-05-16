<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "praktik_formulir";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir peserta didik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_namleng = "";
    $error_jkel = "";
    $error_nisn = "";
    $error_nik = "";
    $error_temlahir = "";
    $error_tglahir = "";
    $error_agama = "";
    $error_kebukhusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_namdus = "";
    $error_namkel = "";
    $error_kec = "";
    $error_kodepos = "";
    $error_ttinggal = "";
    $error_transport = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kpspkh = "";
    $error_nokpspkh = "";
    $error_kwn = "";
    $error_namaneg = "";

    $namleng = "";
    $jkel = "";
    $nisn = "";
    $nik = "";
    $temlahir = "";
    $tglahir = "";
    $agama = "";
    $kebukhusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $namdus = "";
    $namkel = "";
    $kec = "";
    $kodepos = "";
    $ttinggal = "";
    $transport = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kpspkh = "";
    $nokpspkh = "";
    $kwn = "";
    $namaneg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP Hanya Boleh Angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <center><h2>DATA PRIBADI</h2></center>
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatadiri.php">

                    <div class="form-group row">
                        <label for="namleng" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namleng" id="namleng" class="form-control" <?php echo ($error_namleng !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $namleng; ?>"> <span class="warning"><?php echo $error_namleng ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkel" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="jkel" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jkel; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="nisn" id="nisn" class="form-control" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nik" class="form-control" <?php echo ($error_nik !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="temlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="temlahir" id="temlahir" class="form-control" <?php echo ($error_temlahir !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $temlahir; ?>"> <span class="warning"><?php echo $error_temlahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tglahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type='date' id='tanggal' name='tanggal' onchange='cetakTanggal()'/>
                            <script>
                            // set default tanggal saat ini
                            document.querySelector('#tanggal').value = new Date().toISOString().substring(0, 10);

                            // fungsi onchange cetak nilai
                            function cetakTanggal() {
                            var tanggal = document.querySelector('#tanggal').value;
                            document.querySelector('#cetak').innerHTML = tanggal.split('-')[2]+'-'+tanggal.split('-')[1]+'-'+tanggal.split('-')[0];
                            }
                            </script>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kebukhusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="kebukhusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_kebukhusus; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="rt" id="rt" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="rw" id="rw" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="namdus" class="col-sm-2 col-form-label">Nama Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" name="namdus" id="namdus" class="form-control" <?php echo ($error_namdus !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $namdus; ?>"> <span class="warning"><?php echo $error_namdus ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="namkel" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="namkel" id="namkel" class="form-control" <?php echo ($error_namkel !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $namkel; ?>"> <span class="warning"><?php echo $error_namkel ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kec" id="kec" class="form-control" <?php echo ($error_kec !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $kec; ?>"> <span class="warning"><?php echo $error_kec ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kodepos" id="kodepos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="ttinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="ttinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="transport" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="transport">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_transport; ?></span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nohp" id="nohp" class="form-control" <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $nohp; ?>"> <span class="warning"><?php echo $error_nohp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="notelp" class="col-sm-2 col-form-label">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" id="notelp" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kpspkh" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kpspkh" value="Ya">Ya</label>
                            <input type="radio" name="kpspkh" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_kpspkh; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nokpspkh" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nokpspkh" id="nokpspkh" class="form-control" <?php echo ($error_nokpspkh !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $nokpspkh; ?>"> <span class="warning"><?php echo $error_nokpspkh ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="appaud" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kwn" value="Indonesia (WNI)">Indonesia (WNI)</label>
                            <input type="radio" name="kwn" value="Asing (WNA)">Asing (WNA)</label> 
                            <span class="warning" ><?php echo $error_kwn; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="namaneg" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaneg" id="namaneg" class="form-control" <?php echo ($error_namaneg !="" ? "is-invalid" : ""); ?> placeholder="..." value="<?php echo $namaneg; ?>"> <span class="warning"><?php echo $error_namaneg ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-12" align="right">
                            <button type="submit" name="submit" class="btn btn-outline-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>