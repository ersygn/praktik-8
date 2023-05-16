<h2 style="background-color: black; color: white; width: 133%; padding: 10px;">DATA REGISTRASI PESERTA DIDIK ANDA</h2>
<table border="1" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Jenis Pendidikan</th>
		<th>Tanggal Masuk Sekolah</th>
		<th>NIS</th>
		<th>Nomor Peserta Ujian</th>
		<th>Apakah Pernah Paud</th>
		<th>Apakah Pernah TK</th>
		<th>No. Seri SKHUN Sebelumnya</th>
		<th>No. Seri Ijazah Sebelumnya</th>
		<th>Hobi</th>
		<th>Cita Cita</th>
	<?php
	//konfigurasi database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "praktik_formulir";
	//perintah php untuk akses ke database
	$con = mysqli_connect($host, $user, $password, $database);

	$praktik_formulir = mysqli_query($con, "SELECT * from peserta");
	$no=1;
	foreach ($praktik_formulir as $row) {
		echo "<tr align='center'>
			 <td>$no</td>
			 <td>".$row['jenpend']."</td>
			 <td>".$row['tglmsksklh']."</td>
			 <td>".$row['nis']."</td>
			 <td>".$row['nopeujian']."</td>
			 <td>".$row['paud']."</td>
			 <td>".$row['tk']."</td>
			 <td>".$row['noserskhun']."</td>
			 <td>".$row['noserijazah']."</td>
			 <td>".$row['hobi']."</td>
			 <td>".$row['cita']."</td>
			 </tr>";
		$no++;
	}
	?>
</table>

<h2 style="background-color: black; color: white; width: 133%; padding: 10px;">DATA DIRI PRIBADI ANDA</h2>
<table border="1" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Jenis Kelamin</th>
		<th>NISN</th>
		<th>NIK</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Agama</th>
		<th>Berkebutuhan Khusus</th>
		<th>Alamat</th>
		<th>Rt</th>
		<th>Rw</th>
		<th>Nama Dusun</th>
		<th>Nama Kelurahan</th>
		<th>Kecamatan</th>
		<th>Kode Pos</th>
		<th>Tempat Tinggal</th>
		<th>Transport</th>
		<th>No.Hp</th>
		<th>No.Telp</th>
		<th>Email</th>
		<th>KPS/PKH/KIP</th>
		<th>No.KPS/PKH/KIP</th>
		<th>Kewaeganegaraan</th>
		<th>Nama Negara</th>
	</tr>
	<?php
	//konfigurasi database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "praktik_formulir";
	//perintah php untuk akses ke database
	$con = mysqli_connect($host, $user, $password, $database);

	$praktik_formulir = mysqli_query($con, "SELECT * from datapribadi");
	$no=1;
	foreach ($praktik_formulir as $row) {
		echo "<tr align='center'>
			 <td>$no</td>
			 <td>".$row['namleng']."</td>
			 <td>".$row['jkel']."</td>
			 <td>".$row['nisn']."</td>
			 <td>".$row['nik']."</td>
			 <td>".$row['temlahir']."</td>
			 <td>".$row['tglahir']."</td>
			 <td>".$row['agama']."</td>
			 <td>".$row['kebukhusus']."</td>
			 <td>".$row['alamat']."</td>
			 <td>".$row['rt']."</td>
			 <td>".$row['rw']."</td>
			 <td>".$row['namdus']."</td>
			 <td>".$row['namkel']."</td>
			 <td>".$row['kec']."</td>
			 <td>".$row['kodepos']."</td>
			 <td>".$row['ttinggal']."</td>
			 <td>".$row['transport']."</td>
			 <td>".$row['nohp']."</td>
			 <td>".$row['notelp']."</td>
			 <td>".$row['email']."</td>
			 <td>".$row['kpspkh']."</td>
			 <td>".$row['nokpspkh']."</td>
			 <td>".$row['kwn']."</td>
			 <td>".$row['namaneg']."</td>
			 </tr>";
		$no++;
	}
	?>
</table>

<h2 style="background-color: black; color: white; width: 133%; padding: 10px;">DATA AYAH KANDUNG ANDA</h2>
<table border="1" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Nama Ayah</th>
		<th>Tahun Lahir</th>
		<th>Pendidikan Ayah</th>
		<th>Pekerjaan Ayah</th>
		<th>Gaji Ayah</th>
		<th>Bekebutuhan Khusus</th>
	</tr>
	<?php
	//konfigurasi database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "praktik_formulir";
	//perintah php untuk akses ke database
	$con = mysqli_connect($host, $user, $password, $database);

	$praktik_formulir = mysqli_query($con, "SELECT * from dataayahkandung");
	$no=1;
	foreach ($praktik_formulir as $row) {
		echo "<tr align='center'>
			 <td>$no</td>
			 <td>".$row['namaayah']."</td>
			 <td>".$row['tlayah']."</td>
			 <td>".$row['pendayah']."</td>
			 <td>".$row['kerjayah']."</td>
			 <td>".$row['gajiayah']."</td>
			 <td>".$row['kebuayah']."</td>
			 </tr>";
		$no++;
	}
	?>
</table>

<h2 style="background-color: black; color: white; width: 133%; padding: 10px;">DATA IBU KANDUNG ANDA</h2>
<table border="1" cellpadding="10">
	<tr><th>No</th>
		<th>Nama Ibu</th>
		<th>Tahun Lahir</th>
		<th>Pendidikan Ibu</th>
		<th>Pekerjaan Ibu</th>
		<th>Gaji Ibu</th>
		<th>Bekebutuhan Khusus</th>
	</tr>
	<?php
	//konfigurasi database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "praktik_formulir";
	//perintah php untuk akses ke database
	$con = mysqli_connect($host, $user, $password, $database);

	$praktik_formulir = mysqli_query($con, "SELECT * from dataibukandung");
	$no=1;
	foreach ($praktik_formulir as $row) {
		echo "<tr align='center'>
			 <td>$no</td>
			 <td>".$row['namaibu']."</td>
			 <td>".$row['tlibu']."</td>
			 <td>".$row['pendibu']."</td>
			 <td>".$row['kerjaibu']."</td>
			 <td>".$row['gajibu']."</td>
			 <td>".$row['kebuibu']."</td>
			 </tr>";
		$no++;
	}
	?>
</table>