<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: linen;
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

      .container h3 {
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            -webkit-text-stroke: 1px black;
            text-shadow: 1px 1px 1px gray;
        }

        .container {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 70px;
        }

      .table-light .table-id,
      .table-light .table-kode,
      .table-light .table-matkul,
      .table-light .table-sks,
      .table-light .table-pilih {
        background-color: rgba(9, 42, 117, 0.7);
      }

      .table thead th {
        color: rgba(9, 42, 117, 0.7);
        text-align: center;
        font-size: 18px;
      }
      h3{
        font-family: 'times new roman';
      }
    </style>
</head>
<body style="background: linen">
<?php include 'navbar.php'; ?><br><br>
<div class="container">
        <h3 class="text-center">COURSES</h3><br>
        <form method="POST" action="prosesinputmk.php">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <table class="table table-primary table-striped table-hover">
                        <thead class="table-primary text-center table-group-divider">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Kode MK</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">SKS</th>
                                <th scope="col">Pilih</th>
                            </tr>
                        </thead>
                        <tbody class="table-primary text-center table-group-divider">
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($connect, "SELECT * FROM matakuliah");
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td><?= $data['no']; ?></td>
                                    <td><?= $data['kodemk']; ?></td>
                                    <td><?= $data['matakuliah']; ?></td>
                                    <td><?= $data['sks']; ?></td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input"style="margin-left:40px" type="checkbox" name="pilih[]"
                                                value="<?= $data['no'] . ',' . $data['kodemk'] . ',' . $data['matakuliah'] . ',' . $data['sks']; ?>"
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-outline-primary">Submit</button><br><br>
                </div>
            </div>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
