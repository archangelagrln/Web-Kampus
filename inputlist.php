<?php
    include 'koneksi.php';

    try {
        if (isset($_POST["submit"])) {
            $ID= $_POST['id'];
            $nama = ucwords($_POST['nama']);
            $deadline = $_POST["deadline"];
            $deskripsi = ucwords ($_POST["deskripsi"]);
        
            $query = "INSERT INTO todolist VALUES ('', '$nama', '$deadline', '$deskripsi')";


            $created = mysqli_query($connect, $query);
            echo '<script>alert("Successfully Added To-do-list")</script>';
            echo '<script>window.location="dashboarduser.php"</script>';

        }
    } catch (Exception $error) {
        echo "<script>alert('Failed add to-do-list') </script>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <div class="container card mt-5 col-md-8" style="background : #B0C4D3">
        <div class="card-header fw-bold">ADD TO DO LIST</div>
        <div class="card-body">
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="namas" class="form-label">Title</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input Title" name="nama" required>
                </div>
                <div class=" mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Input Description" required rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                <a href="dashboarduser.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>