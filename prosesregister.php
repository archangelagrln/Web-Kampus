<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if(mysqli_query($connect, $query_sql)){
    echo "<script>alert('registration succeed') </script>";
	echo "<script>window.location.href = 'login.php' </script>";
} else {
    echo "Pendaftaran Gagal : ". mysqli_error($connect);
}
?>