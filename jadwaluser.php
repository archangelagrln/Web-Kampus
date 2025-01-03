<!DOCTYPE html>
<html>

<head>
  <title>Jadwal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: white;
      display: flex;
      justify-content: top;
      align-items: top;
      flex-direction: column;
      font-family: sans-serif;
      font-size: 14px;
      height: 100vh;
      margin-top: 70px;
      margin-bottom: 100px;
    }

    .container {
      margin-top: 70px;
    }

    .table thead th {
      color: #fff;
      text-align: center;
    }

    .table-light .table-kode,
    .table-light .table-nama,
    .table-light .table-sks,
    .table-light .table-kelas,
    .table-light .table-jadwal,
    .table-light .table-dosen {
      background-color: rgba(9, 42, 117, 0.7);
    }
    h3{
      font-family: 'times new roman';
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?><br><br>
  <div class="container" style="background:#F5F5F5;padding: 20px">
    <h3 class="text-center mb-4">SCHEDULE</h3>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <table class="table table-light table-striped table-bordered">
          <thead class="text-center">
            <tr>
              <th scope="col" class="table-kode">Kode Mata Kuliah</th>
              <th scope="col" class="table-nama">Mata Kuliah</th>
              <th scope="col" class="table-sks">SKS</th>
              <th scope="col" class="table-kelas">Kelas</th>
              <th scope="col" class="table-jadwal">Jadwal</th>
              <th scope="col" class="table-dosen">Dosen</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($connect, "SELECT * FROM jadwalkuliah");
            while ($data = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><?= $data['kode']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['sks']; ?></td>
                <td><?= $data['kelas']; ?></td>
                <td><?= $data['jadwal']; ?></td>
                <td><?= $data['dosen']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
