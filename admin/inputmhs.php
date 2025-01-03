<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <br><br>
  <div class="container" style="background : #B0C4D3;padding : 20px" >
    <h3 class="text-center">Data Mahasiswa</h3>
    <form METHOD="POST" action="prosesinputmhs.php">
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM Anda">

      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <textarea name="nama" class="form-control" rows="3" id="nama" placeholder="Masukkan nama"></textarea>
      </div>
      <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin"  value="Laki-Laki">
        <label for="laki-laki">Laki-Laki</label><br>
        <input type="radio" name="jenis_kelamin"  value="Perempuan">
        <label for="perempuan">Perempuan</label><br>
      </div>
      
    
        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Masukkan Prodi Anda">
        </div>
        <div class="mb-3">
          <label for="angkatan" class="form-label">Angkatan</label>
          <input type="text" name="angkatan" class="form-control" id="angkatan" placeholder="Masukkan Angkatan Anda">
        </div>
      <button type="submit" class="btn btn-primary" >Submit</button><br><br>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
