<?php 
// materi video pertemuan 7 - get and post
// variable scope / lingkup variabel

// varibel lokal untuk halaman ini
// $x = 10;
// echo $x;
// echo "<hr>";

// Variabel Global
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<hr>";

// SUPERGLOBALS
// variable global milik PHP
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];
// echo "<hr>";

// $_GET
$mahasiswa = [
    [
        "nama" => "Rivan",
        "nrp" => "213040045",
        "email" => "rivan.213040045@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika", 
        "gambar" => "1anime.jpg"
    ],
    [
        "nama" => "Ammar",
        "nrp" => "213040057",
        "email" => "ammar.213040057@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2anime.jpg" 
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>