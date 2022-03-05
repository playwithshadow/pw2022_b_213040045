<?php 
// Materi Pertemuan 4 - Function

//  Date
// untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
    echo "<hr>";

// Time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
    echo time();
    echo "<hr>";

// untuk menampilkan 100 hari kebelakang
echo date("d-M-Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// untuk membuat sendiri detik 
// memiliki parameter 6 
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun


// mengecek tanggal lahir kita
echo date("l", mktime(0,0,0,1,24,2002));
echo "<hr>";

// strtotime
// kebalikan dari mktime
// menggunakan string

// format tanggal
echo strtotime("24 jan 2002");
echo "<hr>";
// fungsi yang sering digunakan

// String
// strlen() untuk menghitung panjang sebuah string
$str = 'abcdef';
echo strlen($str); // 6
echo "<br>";

$str = ' ab cd ';
echo strlen($str); // 7
echo "<hr>";

// strcmp()/ string compare untuk membandingkan 2 buah string
$data=strcmp("qwerty","qwertr");
echo $data; // hasilnya 0 karena nilai pada strcmpnya sama
echo "<hr>";

$data=strcmp("qwerty","qwertyui");
echo $data; // hasil -2 karena kita menambahkan ui pada data kedua
echo "<hr>";

$data=strcmp("qwertyuiop","qwerty");
echo $data; // hasil 4 karena kita menambahkan uiop pada data pertama
echo "<hr>";

$password1 = "qwertd";
$password2 = "qwerty";
$cek = strcmp($password1, $password2);
if($cek)
{
echo "password yang anda masukan berbeda";
}
else
{
echo "password1 dan password2 sama";
}
echo "<hr>";

// explode() untuk memecah sebuah string menjadi array
// htmlspecialchars() function khusus untuk menjaga kita dari serangan hacker

// Utillity atau fungsi bantuan
// var_dump() untuk mencetak isi dari sebuah variabel dll
// isset() untuk mengecek apakah sebuah varibel sudah pernah dibikin atau belum
// empty() untuk mengecek apakah sebuah variabel itu kosong atau tidak
// die() untuk memberhentingkan sebuah program kita
// sleep() untuk memberhentikan sementara


?>