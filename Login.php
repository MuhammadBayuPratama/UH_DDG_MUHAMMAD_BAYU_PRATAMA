<?php
include_once 'koneksi.php';

$email =$_POST['Email'];
$password =$_POST['Password'];

$user = $koneksi
    ->query("SELECT * FROM user where email ='$email' && password ='$password'")
    ->Fetch_assoc();
header("location: dashboard.php")
?>
