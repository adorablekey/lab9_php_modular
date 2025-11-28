<?php
require 'config/database.php';

if(isset($_POST['simpan'])){
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$email', '$alamat')");
    header("Location:index.php?page=user/list");
}
?>

<h2>Tambah User</h2>

<form method="POST">
    <label>Nama</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat" required></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>
