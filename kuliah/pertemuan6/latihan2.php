<?php 
// $mahasiswa = [
//     ["Rivan", "213040045", "rivan.213040045@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Ammar", "213040057", "rivan.213040057@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// Materi video pertemuan 6 - array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        "email" => "rivan.213040057@mail.unpas.ac.id",
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>" alt=""></li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>