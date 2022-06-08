<?php
require '../../config/functions.php';

$keyword = $_GET["keyword"];

$query =
    "SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori
                WHERE
                nama_buku LIKE '%$keyword%' OR
                body_buku LIKE '%$keyword%'
                ";
$tabelbuku = query($query);

?>

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Isi Buku</th>
            <th scope="col">Gambar Buku</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($tabelbuku as $buku) : ?>
            <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $buku["nama_buku"]; ?></td>
                <td><?= $buku["body_buku"]; ?></td>
                <td><img src="../img/<?= $buku['gambar']; ?>" width="75px"></td>
                <td><?= $buku["nama_kategori"]; ?></td>
                <td>
                    <a href="ubahbuku.php?id=<?= $buku['id_buku']; ?>" class="btn badge bg-primary">Ubah</a>
                    <a href="hapusbuku.php?id=<?= $buku["id_buku"]; ?>" onclick="return confirm('Apakah data ini benar akan dihapus?')" class="btn badge bg-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>