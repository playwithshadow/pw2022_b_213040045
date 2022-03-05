<?php
// Materi Pertemuan 4 - Function

// = dibawah mengirimkan sebuah parameter default
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!-- = itu sama dengan php echo  -->
    <h1><?= salam("Pagi", "Rivan"); ?></h1>
</body>
</html>