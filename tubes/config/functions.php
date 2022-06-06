<?php
// function koneksi untuk koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "tubes_vantech") or die('KONEKSI GAGAL');

    return $conn;
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);
    $rows = [];
    // mysqli_fecth_assoc adalah fungsi yang menghasilkan array assosiative yang mana indexnya sesuai dengan nama kolom yang di seleksi
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    // return mengembalikkan, menghentikan,, dan mengembalikkan nilai yang telah di hasilkan fungsi
    return $rows;
}


// function tambah untuk menambahkan data ke database
function tambah($data)
{
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $level = $data['level'];

    // cek apakah user tidak menguploud gambar
    if ($_FILES['gambar']['error'] === 4) {
        // pilih gambar default
        $gambar = 'nophoto.jpg';
    } else {
        // jalankan fungsi uploud
        $gambar = uploud();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM tbl_login WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);



    // tambahkan userbaru ke database
    $query = "INSERT INTO tbl_login
                VALUES
                ('', '$nama', '$username', '$password', '$email', '$gambar', '$level')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// function hapus untuk menghapus data dari database
function hapus($id)
{
    $conn = koneksi();

    // query mahasiswa berdasarkan id
    $adm = query("SELECT * FROM tbl_login NATURAL JOIN tbl_level WHERE id = $id")[0];

    // cek jika gambar default
    if ($adm['gambar'] != 'nophoto.jpg') {
        // hapus gambar
        unlink('../../dashboardadmin/img/' . $adm['gambar']);
    }

    mysqli_query($conn, "DELETE FROM tbl_login WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// function uploud untuk mengupload gambar
function uploud()
{
    // siapkan data gambar
    $filename = $_FILES['gambar']['name'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    $filesize = $_FILES['gambar']['size'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ['jpg', 'jpeg', 'png'];

    // cek apakah file yang diupload bukan gambar
    if (!in_array(strtolower($filetype), $allowedtype)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek apakah gambar terlalu besar
    if ($filesize > 10000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // proses uploud gambar
    $newfilename = uniqid() . '.' . $filetype;
    move_uploaded_file($filetmpname, '../../dashboardadmin/img/' . $newfilename);

    return $newfilename;
}

// function ubah untuk mengubah data dari database
function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploud();
    }


    // query update data
    $query = "UPDATE tbl_login SET 
                nama = '$nama',
                username = '$username',
                email = '$email',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    // return mysqli_error($conn);
}

// function untuk cari data dari database
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM tbl_login NATURAL JOIN tbl_level 
                WHERE 
                nama LIKE '%$keyword%' OR 
                username LIKE '%$keyword%' OR 
                email LIKE '%$keyword%'
                ";


    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}



// function untuk registrasi anggota
function registrasi($data)
{
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $gambar = strtolower(stripslashes($data["gambar"]));
    $level = $data['level'];

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM tbl_login WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    $query = "INSERT INTO tbl_login
                VALUES
                ('', '$nama', '$username', '$password', '$email', '$gambar', '$level')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
