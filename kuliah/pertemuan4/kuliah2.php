<?php 
// Materi Pertemuan 4 - Function

// definisikan masing -masing sisi kubus
$a = 9;
$b = 4;

// hitung masing - masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b,3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo "<hr>";

// deklarasi / definisi function
function totalVolumeDuaKubus ($a, $b){ 

    $total = pow($a, 3) + pow($b,3);

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total"; 
} 

// Pemanggilan / Eksekusi function
echo totalVolumeDuaKubus(9, 4);
echo"<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);
echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga
function luasSegitiga($a, $t) {
    $total_luas = 1/2 * $a * $t;
    return "Jumlah dari Luas segitiga dengan alas $a dan tinggi $t adalah $total_luas";
}
echo luasSegitiga(2, 4);
echo "<br>";
echo luasSegitiga(10,6);






?>