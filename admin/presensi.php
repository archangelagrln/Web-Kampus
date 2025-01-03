
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background: #ffce54;
            background: linear-gradient(rgba(2,5,25,0.4),rgba(2,5,25,0.4)),url(../image/ccc.jpg);
            background-size : cover;
            color: white;
           
        }
        .content {
            flex: 1;
            overflow: auto; 
            padding-top: 70px; 
        }
        .footer {
            background-color: #22242A;
            color: #e8e8e8;
            text-align: center;
            padding: 10px 0;
        }
        .offcanvas {
            border: 5px;
        }
        .offcanvas-header {
            background: linear-gradient(135deg, #1e90ff, #6495ed);
            color: white;
        }
        .offcanvas-header img {
            border: 2px solid white;
        }
        .offcanvas-body {
            background-color: #22242a;
           
        }
        .offcanvas-body .nav-link {
            color: #e8e8e8;
            font-size: 16px;
            transition: color 0.3s, background-color 0.3s;
        }
        .offcanvas-body .nav-link:hover {
            color: #1e90ff;
            background-color: #333;
            border-radius: 5px;
        }
        .offcanvas-body .nav-link i {
            margin-right: 10px;
        }
        .offcanvas-body .nav-link.active {
            color: #1e90ff;
            background-color: #444;
            border-radius: 5px;
        }
        .offcanvas-body form {
            margin-top: 20px;
        }
        .offcanvas-body form input {
            border-radius: 10px;
        }
        .offcanvas-body form button {
            border-radius: 10px;
        }
        .navbar-toggler {
            border-color: #1e90ff;
        }
        .navbar-brand {
            color: #1e90ff;
            font-weight: bold;
            font-size: 20px;
        }
        .btn-outline-danger {
            border-color: #1e90ff;
            color: #1e90ff;
        }
        .btn-outline-danger:hover {
            background-color: #1e90ff;
            color: white;
        }
        .navbar {
            padding: 20px;
        }
    </style>
</head>
<body >
<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-family: 'Times New Roman', serif;">MYSTERY MENU</a>
        </div>
        <a href="logout.php" class="btn btn-outline-danger">Log Out</a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <div class="d-flex flex-column align-items-center ms-auto"><br>
                    <img src="../image/admin.jpg" alt="User Photo" class="rounded-circle mb-3" style="width: 100px; height: 90px;">
                    <h5>Michael</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                        <a class="nav-link" href="menuutama2.php" >Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datamhs.php" >Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matakuliahbaca.php" >Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datadosen.php" >Data Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="presensi.php" >Presensi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    <br>
    <br><br><br><br>
    <br>
    <br>
<br> <h2 style="margin-left:480px;color:white;-webkit-text-stroke: 0.8px white">PRESENSI MAHASISWA</h2><br><br>
<table border = 1 class="table table-striped table-bordered border-secondary">
    
    <thead>
            <tr>
                <th scope="col">NO MK</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Waktu</th>
             
            </tr>
    </thead>
    <tbody>
         <?php
        include '../koneksi.php'; 
       
        $query = mysqli_query($connect, "SELECT * from absen");
        while ($data = mysqli_fetch_array($query)) 
        {?>
   
            <tr>
                <td scope="row"><?=$data['nim']; ?></td>
                <td scope="row"><?=$data['nama']; ?></td>
                <td scope="row"><?=$data['kelas']; ?></td>
                <td scope="row"><?=$data['matkul']; ?></td>
                <td scope="row"><?=$data['kehadiran']; ?></td>
                <td scope="row"><?=$data['waktu']; ?></td>
               
            </tr>
           
        <?php 
        }
        ?>
    </tbody> 
</table><br>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
