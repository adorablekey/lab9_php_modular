<?php
require 'config/database.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'"));

if(isset($_POST['update'])){
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE user SET 
        nama='$nama',
        email='$email',
        alamat='$alamat'
        WHERE id='$id'
    ");

    header("Location:index.php?page=user/list");
}
?>

<h2>Edit User</h2>

<form method="POST">
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat"><?= $data['alamat']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>
