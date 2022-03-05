<?php 
// Materi Pertemuan 4 - function
// built-in function (fungsi yang sudah tertanam didalam bahasa pemograman)

// date()
// untuk mengetahui waktu saat ini
// default waktunya/ timezonenya : UTC(-7 jam) bukan GMT
echo date("l, j F Y");
echo "<hr>";
echo date("l", time());
echo "<hr>";

// time()
// adalah sebuah argument
// UNIX Timestamp / EPOCH Time
//  Detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
// Hari apa 100 hari kebelakang
echo date("l", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// formatnya mktime(0,0,0,0,0,0);
// jam, menit, detik,bulan,tanggal,tahun
echo mktime(10,45,0,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,01,24,2002)); 
echo "<hr>";
echo strtotime("2 June 2003");
echo "<br>";
echo mktime(0,0,0,06,02,2003);
echo"<hr>";

// Fungsi Matematika
// pow() untuk pangkat
echo pow(2,3);
echo"<br>";

// rand() untuk bilangan random
echo rand(1,10);
echo "<br>";

// pembulatan, (koma didalam code editor memakai titik)
echo round(2.7); // pembulatan ke nilai terdekat
echo "<br>";
echo ceil(2.1); // pembulatan ke atas dari kata (ceiling yang artinya langit2)
echo "<br>";
echo floor(2.9); // pembulatan ke bawah (floor / lantai)




?>