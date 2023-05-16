<h2>List Data Kontak Pengguna</h2>
<table border="1">
	<tr>
		<th>NO</th>
		<th>ID</th>
		<th>NAMA</th>
		<th>GENDER</th>
		<th>EMAIL</th>
		<th>ALAMAT</th>
		<th>KOTA</th>
		<th>PESAN</th>
	</tr>
	<?php
	include 'koneksilatihanp8.php';
	$datakontak = mysqli_query($koneksilatihanp8, "SELECT * from datakontak");
	$no=1;
	foreach ($datakontak as $row) {
	echo "<tr>
		 <td>$no</td>
		 <td>".$row['id']."</td>
		 <td>".$row['nama']."</td>
		 <td>".$row['jkel']."</td>
		 <td>".$row['email']."</td>
		 <td>".$row['alamat']."</td>
		 <td>".$row['kota']."</td>
		 <td>".$row['pesan']."</td>
		 </tr>";
	$no++;
	}
	?>
</table>