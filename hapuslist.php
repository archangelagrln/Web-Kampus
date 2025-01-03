<?php
include 'koneksi.php';

$ID = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM todolist WHERE id = '$ID'");

if($query) {
    echo "<script>alert('Delete to-do-list successfully')</script>";
    echo "<script>window.location.href = 'dashboarduser.php'</script>";
} else {
    echo "<script>alert('Delete to-do-list failed')</script>";
}
?>
