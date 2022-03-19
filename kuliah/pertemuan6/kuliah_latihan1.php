<?php
// Materi Pertemuan 6 - Array Associative
// Sebuah array yang indeksnya berupa string, yang ber asosiasi atau berpasangan dengan nilainya


$mahasiswa = [
    [
        "nama" => "Rivan", 
        "npm" => "213040045", 
        "email" => "rivan.213040045@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Sahronie",
        "npm" => "213040043", 
        "email" => "sahronie.213040043@mail.unpas.ac.id", 
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Ammar",
        "npm" => "213040051", 
        "email" => "ammar.213040051@mail.unpas.ac.id", 
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Jamjam",
        "email" => "jamjam.213040043@mail.unpas.ac.id", 
        "npm" => "213040057", 
        "jurusan" => "Teknik Lingkungan"
    ]

];

// var_dump($mahasiswa[1]["email"]);
?>

<?php foreach($mahasiswa as $mhs) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus - Array Associative</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM : <?= $mhs["npm"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
</body>
</html>
<?php endforeach; ?>
