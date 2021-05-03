<?php

include 'koneksi.php';

$semester = $_POST['semester'];

$ip = $_POST['ip'];


mysqli_query($koneksi,"insert into nilai values('','$semester','$ip')");


header("location:index.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai</title>
	 <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <center><h1> DAFTAR INDEKS PRESTASI MAHASISWA </h1></center>

	<hr>

	<table border="1">
	<center>
		<tr>
			<th>NO</th>
			<th>Semester</th>
			<th>IP</th>

		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from nilai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['ip']; ?></td>

				<td>
					<button><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></button>
					<button><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
				</td>
			</tr>
			 <tr>
                        <td><td>
                        <button>
                        <a href="home.php">Tambahkan Data Mahasiswa</a></button>
                    </tr>

			<?php
		}
		?>

	</table>
	</center>
</body>
</html>