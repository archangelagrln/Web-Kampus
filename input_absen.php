<?php
include 'koneksi.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $matkul = $_POST['matkul'];
	$kehadiran = $_POST['kehadiran'];
	$waktu = $_POST['waktu'];


$save = "INSERT INTO absen SET nim='$nim', nama='$nama', kelas='$kelas', matkul='$matkul', kehadiran='$kehadiran', waktu='$waktu'";
	mysqli_query($connect, $save);

if ($save) {
	echo "<script>alert('Successfully checked attendance') </script>";
	 echo "<script>window.location.href = 'presensiuser.php' </script>";	
}else{
	echo "<script>alert('Failed to check attendance') </script>";
}

 ?>