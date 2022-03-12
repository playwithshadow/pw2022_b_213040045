<?php
// Materi Pertemuan 5 - Array
// Studi Kasus :
$mahasiswa = [
    ["Rivan", "213040045", "rivan.213040045@mail.unpas.ac.id", "Teknik Informatika"],
    ["Sahronie", "213040043", "sahronie.213040043@mail.unpas.ac.id", "Teknik Industri"],
    ["Ammar", "213040051", "ammar.213040051@mail.unpas.ac.id", "Teknik Mesin"],

];
echo $mahasiswa[0][2];
echo "<hr>";

?>

<?php foreach($mahasiswa as $mhs) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus</title>
</head>
<body>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NPM :<?= $mhs[1]; ?></li>
        <li>Email :<?= $mhs[2]; ?></li>
        <li>Jurusan :<?= $mhs[3]; ?></li>
    </ul>
</body>
</html>
<?php endforeach; ?>