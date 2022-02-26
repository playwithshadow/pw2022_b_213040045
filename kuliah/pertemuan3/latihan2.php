<?php
// Materi Pertemuan 3
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

// ini menggunakan if
$x = 10;
if( $x < 20 ) {
    echo "benar";
} 
echo "<hr>";

//  ini menggunakan if else
$x = 30;
if( $x < 20 ) {
    echo "benar";
} else {
    echo "salah";
}
echo "<hr>";

//  ini menggunakan if elseif else
$x = 20;
if( $x < 20 ) {
    echo "benar";
} else if ( $x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

?> 