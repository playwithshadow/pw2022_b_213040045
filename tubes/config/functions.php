<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_vantech");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    // mysqli_fecth_assoc adalah fungsi yang menghasilkan array assosiative yang mana indexnya sesuai dengan nama kolom yang di seleksi
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    // return mengembalikkan, menghentikan,, dan mengembalikkan nilai yang telah di hasilkan fungsi
    return $rows;
}
