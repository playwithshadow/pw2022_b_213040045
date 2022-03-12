<?php
// Materi Pertemuan 5 - Array
// Array adalah variable yang dapat menyimpan lebih dari satu nilai sekaligus

// Membuat varibel tanpa menggunakan array
$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "Rivan";

// Membuat Array
// Nilai didalam array disebut dengan elemen
// Array Cara Baru
$hari = ["Senin", "Selasa", "Rabu", "Kamis"] ; 

// Array Cara lama
$bulan = array("Januari", "Februari", "Maret", "April");

// Didalam elemen array boleh berisi string, integer, boolean
$myArray = [100, "Rivan", true];

// Menampilkan Array
// Menampilkan satu elemen menggunakan index
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Menampilkan semua isi array sekaligus menggungakan 2 fungsi yaitu :
// var_dump() atau print_r() 
// ini dilakukan hanya oleh programmer pada saat melakukan debugging
// var_dump menampilkan secara lengkap

var_dump($hari);
echo"<br>";
// print_r() menampilkan sebagian saja
print_r($hari);
echo "<hr>";

// Mencetak semua isi array menggunakan looping
// for, fungsi count berfungsi untuk menyuruh php menghitung sendiri jumlah array yang masuk dan keluar
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir  jika ingin lengkap dan tepat memasukkan nilai index kedalam elemen
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);

?>