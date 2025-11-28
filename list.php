<?php
require 'config/database.php';
$query = mysqli_query($koneksi, "SELECT * FROM user");
?>

<h2>Data User</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; while($data = mysqli_fetch_assoc($query)): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><?= $data['alamat']; ?></td>
        <td>
            <a href="index.php?page=user/edit&id=<?= $data['id']; ?>">Edit</a>
            <a href="index.php?page=user/hapus&id=<?= $data['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>
