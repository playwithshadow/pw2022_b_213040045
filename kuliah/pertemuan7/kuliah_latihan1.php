<?php 
// Materi Pertemuan 7 - Get and Post
// SUPERGLOBALS
// Variable bawaan php yang bisa di akses dimanapun
// Berbentuk array associative
// $_GET
// $_POST
// $_SERVER

// $_GET["nama" => "Rivan", "email" => "rivan@gmail.com"];

// $_GET["nama"] = "Rivan";
// $_GET["email"] = "rivan@gmail.com";

// var_dump($_GET);


?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->
<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Rivan&nrp=213040045&email=rivan@gmail.com">Rivan</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Ammar&nrp=213040057&email=ammar@gmail.com">Ammar</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Ardhi&nrp=213040051&email=ardhi@gmail.com">Ardhi</a>
    </li>
</ul>