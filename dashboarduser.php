<?php
  session_start();
  if(empty($_SESSION['username'])) {
      header("location:login.php?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .box {
            height: 300px;
            background: url('https://img.freepik.com/free-vector/gradient-abstract-technology-background_23-2149213766.jpg');
            background-size: cover;
            background-blend-mode: overlay;
            margin: 73px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10%;
            border-radius: 20px;
            
        }
        .content{
            margin-left: 50px;
        }
        .content h1 {
            font-family: 'Times New Roman';
            color: #f5f5f5;
            font-size: 50px;
        }

        .content p {
            color: #f5f5f5;
            font-size: 20px;
            margin-top: 10px; 
            font-family: 'Times New Roman';
        }
    </style>
</head>
<body style="background : #F5F5F5">
<?php include 'navbar.php'; ?>
    <div class="box">
        <div class="container">
            <div class="content">
                <h1>Hello, <?=$_SESSION['username']?></h1>
                <p>Welcome to Mystery</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="fw-bold" style="color:rgba(9, 42, 117, 0.815)">MY TO-DO-LIST</h2><br>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="inputlist.php" class="btn btn-primary"> Add To-Do-List</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include 'koneksi.php';
          
            $query = mysqli_query($connect, "SELECT * FROM todolist");

           
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="col">
                <div class="card h-100 border border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama']; ?></h5>
                        <p class="card-text"><?= $data['deskripsi']; ?></p>
                        <p class="fw-bold">Deadline : </p>
                        <p class="fw-bold card-text"><?= $data['deadline']; ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a class="btn btn-danger" href="hapuslist.php?id=<?= $data["id"]; ?>" onclick="return confirm('Are you sure you want to delete to-do-list?')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                        <a class="btn btn-primary" href="editlist.php?id=<?= $data["id"]; ?>"> Edit</a>
                    </div>
                </div>
            </div>                    
            <?php } ?>
        </div><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
