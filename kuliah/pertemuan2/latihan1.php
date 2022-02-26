<?php 
    // Pertemuan2 Belajar Sintaks PHP
    // Perbedaan Kutip satu dan Kutip dua, fungsinya sama aja untuk mencetak string, dan didalam php kutip dua itu lebih sakti daripada kutip satu

    // Belajar Mengenai Nilai
    //  ada angka (integer), tulisan (string), true/false (boolean)
    echo 10; // ini adalah integer
    echo '<br>';
    echo 'Rivan'; // ini adalah string
    echo '<br>';
    echo false; // ini adalah boolean null
    echo '<hr>';
    
    // Belajar Mengenai Variabel
    // Variabel adalah wadah/tempat untuk menyimpan/menampung nilai 
    // cara membuatnya adalah dengan cara, awali dengan tanda $
    // boleh mengandung angka, tidak boleh diawali angka
    // tidak boleh ada spasi, jika ada spasi diganti dengan _ , contoh $nama_depan
    $nama_depan = 'Rivan';
    echo $nama_depan;
    echo '<hr>';

    //  Belajar Mengenai String
    // '', ""
    $hari = "Jum'at";
    echo $hari;
    echo "<br>";
    echo 'Muhamad Rivan Sahronie : "Halo, Semua!"';
    echo '<br>';

    // Belajar Escape Character
    // Simbol escape character \
    echo 'Rivan : "Selamat hari jum\'at"';
    echo '<br>';
    echo "Rivan : \"Selamat Hari jum'at\"";
    echo '<br>';

    // Interpolasi
    // Mencetak Langsung isi varibel
    // Hanya bisa oleh ""
    echo "Halo, nama saya $nama_depan";
    echo '<br>';
    // Dengan menggunakan kutip satu akan terjadi :
    echo 'Halo, nama saya $nama_depan';
    echo '<hr>';

    // Concat / Penggabung String
    // Simbolnya menggunakan ()
    $nama_depan = 'Muhammad';
    $nama_belakang = 'Rivan';
    echo $nama_depan. " " .$nama_belakang;
    echo '<br>';
    echo 'Rivan : "Selamat'. "hari Jum'at\"";
    echo '<hr>';

    // Operator
    // Jenis operator pertama Aritmatika :
    //  +, -, *, /, % (Modulo / Modulus / Sisa Bagi)

    echo $tambah = 1 +1;
    echo '<br>';

    echo "Hasil dari 1+1 adalah". " " .$tambah;
    echo '<br>';
    echo (1 + 2) * 3 - 4; // Yang Didahulukan KaBaTaKu ( Kali Bagi Tambah Kurang), dan tanda kurung didahulukan.
    echo '<br>';
    echo 10 % 5;
    echo '<br>';
    echo 1 + 1 + "1";
    echo '<hr>';

    // Perbandingan
    //  Simbolnya : < (lebih besar dari), >(lebih kecil dari), <= (lebih besar sama dengan), >= (lebih kecil sama dengan), ==, !=
    echo 1 < 5;
    echo '<br>';
    echo 1 == "1";
    echo '<hr>';

    // Identitas / Strict Comparison
    // Simbolnya : ===, !==
    echo 1 === "1";
    echo '<hr>';

    // Increment / Decrement
    //  tambah / kurang 1
    // Simbolnya : ++, --
    // Bisa disimpen Diawal atau di akhir nilai
    $x  = 10;
    echo ++$x;
    echo '<br>';
    echo $x;
    echo '<hr>';






?>