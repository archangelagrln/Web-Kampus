<?php
session_start();

include '../koneksi.php';

$user=$_POST['username'];
$pass=$_POST['password'];

$query=mysqli_query($connect, "SELECT * FROM admin where username='$user' and password='$pass'") or die(mysqli_error($data));
$data=mysqli_num_rows($query);


if($data > 0){
    $_SESSION['username']  = $user;
    $_SESSION['status']    = "login";
    header("location:menuutama2.php");
} else{
    header("location:login2.php?pesan=gagal");
}
?>