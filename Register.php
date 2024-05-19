<?php
$id = $_POST['ID'];
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$koneksi = new mysqli('localhost', 'root', '', 'latihan');
if ($koneksi) {
    echo "Koneksi Berhasil <br>";
}else{
    echo $Koneksi->Error;
}

$insert = $koneksi->query("INSERT INTO ulanganddg1
(ID, Nama, Email, Password)
values
($id, '$nama', '$email', '$password')
");

if ($insert) {
    echo "Insert Data Berhasil";
}else{
    echo "Gagal Insert Data";
}
?>
