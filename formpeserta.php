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
    $error_jenpend = "";
    $error_tglmsksklh = "";
    $error_nis = "";
    $error_nopeujian = "";
    $error_paud = "";
    $error_tk = "";
    $error_noserskhun = "";
    $error_noserijazah = "";
    $error_hobi = "";
    $error_cita = "";

    $jenpend = "";
    $tglmsksklh = "";
    $nis = "";
    $nopeujian = "";
    $paud = "";
    $tk = "";
    $noserskhun = "";
    $noserijazah = "";
    $hobi = "";
    $cita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopeujian"])) {
            $error_nopeujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopeujian = cek_input($_POST["nopeujian"]);
            if (!is_numeric($nopeujian)) {
                $error_nopeujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserskhun"])) {
            $error_noserskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noserskhun = cek_input($_POST["noserskhun"]);
            if (!is_numeric($noserskhun)) {
                $error_noserskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserijazah"])) {
            $error_noserijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noserijazah = cek_input($_POST["noserijazah"]);
            if (!is_numeric($noserijazah)) {
                $error_noserijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
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
                <center><h2>FORMULIR PESERTA DIDIK</h2></center>
                </div>
                <div class="card-body">
                    <form method="post" action="prosespeserta.php">
                    <div class="form-group row">
                        <label for="jenpend" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenpend" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jenpend" value="Pindahan">Pindahan</label>
                            <span class="warning" ><?php echo $error_jenpend; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type='date' id='date' name='date' onchange='cetakTanggal()'/>
                            <script>
                            // set default tanggal saat ini
                            document.querySelector('#date').value = new Date().toISOString().substring(0, 10);

                            // fungsi onchange cetak nilai
                            function cetakdate() {
                            var date = document.querySelector('#date').value;
                            document.querySelector('#cetak').innerHTML = date.split('-')[2]+'-'+date.split('-')[1]+'-'+date.split('-')[0];
                            }
                            </script>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="..." value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nopeujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopeujian" id="nopeujian" class="form-control <?php echo ($error_nopeujian !="" ? "is-invalid" : ""); ?>" placeholder="..." value="<?php echo $nopeujian; ?>"> <span class="warning"><?php echo $error_nopeujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="paud" value="Ya">Ya</label>
                            <input type="radio" name="paud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_paud; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="tk" value="Ya">Ya</label>
                            <input type="radio" name="tk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_tk; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="noserskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noserskhun" id="noserskhun" class="form-control <?php echo ($error_noserskhun !="" ? "is-invalid" : ""); ?>" placeholder="..." value="<?php echo $noserskhun; ?>"> <span class="warning"><?php echo $error_noserskhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noserijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noserijazah" id="noserijazah" class="form-control <?php echo ($error_noserijazah !="" ? "is-invalid" : ""); ?>" placeholder="..." value="<?php echo $noserijazah; ?>"> <span class="warning"><?php echo $error_noserijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="cita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="cita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_cita; ?></span>
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