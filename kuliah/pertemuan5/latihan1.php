<?php 
	// ARRAY
	// DEFINISI :
	// variabel yang dapat memiliki/menampung banyak nilai
	//  elemen pada array boleh memiliki tipe data yang berbeda
	// pasangan antara key dan value
	// keynya adalah index, yang dimulai dari 0

	// untuk membuat array
	// cara lama
	$hari = array("Senin", "Selasa", "Rabu");

	// Cara Baru
	$bulan = ["Januari", "Februari", "Maret"];
	$arr1 = [123, "tulisan", false];

	// Cara Menampilkan Array
	// var_dump() / print_r()
	// var_dump($hari);
	// echo "<br>";
	// print_r($bulan);
	// echo "<br>";

	// Menampilkan Satu elemen pada array
	// echo $arr1[0];
	// echo "<br>";
	// echo $bulan[1];

	// Menambahkan elemen baru pada array
	var_dump($hari);
	$hari[] = "Kamis";
	$hari[] = "Jum'at";
	echo "<br>";
	var_dump($hari);
 ?>