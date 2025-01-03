<?php
  include "../koneksi.php";
  session_start();

  if(empty($_SESSION['username'])) {
      header("location:login.php?pesan=belum_login");
      exit;
  }

  $id = $_POST['nim'];
  $nama = $_POST['nama'];
  $jeniskelamin = $_POST['jenis_kelamin'];
  $prodi = $_POST['prodi'];
  $akt = $_POST['angkatan'];

  $query = mysqli_query($connect, "INSERT INTO mahasiswa VALUES('$id', '$nama', '$jeniskelamin', '$prodi', '$akt')");

  $message = $query ? "Proses Input Berhasil, ingin lihat hasil " : "Proses Input Gagal";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proses Input Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: #003366;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      width: 500px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    .card-header, .card-footer {
      background: #00509e;
      color: white;
    }
    .card-body {
      background: white;
      color: #003366;
    }
    .btn-primary {
      background: #003366;
      border: none;
    }
    .btn-primary:hover {
      background: #00509e;
    }
  </style>
</head>
<body>
  <div class="card text-center">
    <div class="card-header">
      Input Mahasiswa
    </div>
    <div class="card-body">
      <h5 class="card-title">Status Input</h5>
      <p class="card-text"><?= $message ?></p>
      <a href="datamhs.php" class="btn btn-primary">Lihat Data Mahasiswa</a>
    </div>
    <div class="card-footer text-body-secondary">
      <?= date('Y-m-d') ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
