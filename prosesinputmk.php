<?php
  include "koneksi.php";

  $pilih=$_POST['pilih'];

  $jum=count($pilih);

  for ($a = 0; $a < $jum; $a++) {
    // Pecah nilai dari checkbox menggunakan explode
    list($id, $kodemk, $matakuliah, $sks) = explode(',', $pilih[$a]);
    // Query untuk memasukkan data ke dalam tabel matkul
    $query = mysqli_query($connect, "INSERT INTO matkulinput VALUES ('', '$kodemk', '$matakuliah', '$sks')");
  }

  if($query)
    {
        echo "<script>alert('Berhasil input matkul') </script>";
        echo "<script>window.location.href = 'matakuliahuser.php' </script>";
    }
    else {
        echo "<script>alert('Gagal input matkul') </script>";
    }
?>