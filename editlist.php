<?php
include 'koneksi.php';

$ID = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM todolist WHERE id = '".$_GET['id']."' ");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit to-do-list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container card mt-5 col-md-8" style="background : #B0C4D3">
        <div class="card-header fw-bold">Edit To-Do-List</div>
        <div class="card-body">
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="nama_tugas" class="form-label">Title</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Title" value="<?= $data['nama'] ?>" required>
                </div>
                <div class=" mb-3">
                    <label for="deskripsi_tugas" class="form-label">Description</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Input Description" required rows="3"><?= $data['deskripsi'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" value="<?= $data['deadline'] ?>" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                <a href="dashboarduser.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])) {
    $nama = ucwords($_POST['nama']);
    $deadline = $_POST['deadline'];
    $deskripsi = ucwords($_POST['deskripsi']);

    $query = mysqli_query($connect, "UPDATE todolist SET nama='$nama', deadline='$deadline', deskripsi='$deskripsi' WHERE id='$ID'");

    if($query) {
        echo "<script>alert('Edit to-do-list successfully')</script>";
        echo "<script>window.location.href = 'dashboarduser.php'</script>";
    } else {
        echo "<script>alert('Failed edit to do list')</script>";
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
