<?php
require '../../config/functions.php';

$keyword = $_GET["keyword"];

$query =
    "SELECT * FROM tbl_login NATURAL JOIN tbl_level 
                WHERE level = 'anggota' AND
                (
                    nama LIKE '%$keyword%' OR 
                    username LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%'
                )
                ";
$anggota = query($query);

?>

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Gambar</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($anggota as $admin) : ?>
            <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $admin["nama"]; ?></td>
                <td><?= $admin["username"]; ?></td>
                <td><?= $admin["email"]; ?></td>
                <td><img src="../img/<?= $admin['gambar']; ?>" width="75px" class="rounded-circle"></td>
                <td><?= $admin["level"]; ?></td>
                <td>
                    <a href="ubahanggota.php?id=<?= $admin['id']; ?>" class="btn badge bg-primary">Ubah</a>
                    <a href="hapusanggota.php?id=<?= $admin["id"]; ?>" onclick="return confirm('Apakah data ini benar akan dihapus?')" class="btn badge bg-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>