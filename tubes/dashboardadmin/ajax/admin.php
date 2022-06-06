<?php
require '../../config/functions.php';

$keyword = $_GET["keyword"];

$query =
    "SELECT * FROM tbl_login NATURAL JOIN tbl_level 
                WHERE level = 'admin' AND
                (
                    nama LIKE '%$keyword%' OR 
                    username LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%'
                )
                ";
$admin = query($query);

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
        <?php foreach ($admin as $adm) : ?>
            <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $adm["nama"]; ?></td>
                <td><?= $adm["username"]; ?></td>
                <td><?= $adm["email"]; ?></td>
                <td><img src="../img/<?= $adm['gambar']; ?>" width="75px" class="rounded-circle"></td>
                <td><?= $adm["level"]; ?></td>
                <td>
                    <a href="ubahanggota.php?id=<?= $adm['id']; ?>" class="btn badge bg-primary">Ubah</a>
                    <a href="hapusanggota.php?id=<?= $adm["id"]; ?>" onclick="return confirm('Apakah data ini benar akan dihapus?')" class="btn badge bg-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>