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
    move_uploaded_file($filetmpname, '../img/' . $newfilename);

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

// funtion untuk mengubah password
function ubahpassword($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $password_lama = mysqli_real_escape_string($conn, $data["password_lama"]);
    $password_baru = mysqli_real_escape_string($conn, $data["password_baru"]);
    $konfirm_password = mysqli_real_escape_string($conn, $data["konfirm_password"]);

    $data = query("SELECT * FROM tbl_login WHERE id = $id")[0];

    // cek konfirmasi password
    if ($password_baru !== $konfirm_password) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    if (password_verify($password_lama, $data['password'])) {

        // enkripsi password
        $password = password_hash($password_baru, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        $query = "UPDATE tbl_login SET 
                password = '$password'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    } else {
        echo "<script>
                alert('password lama tidak sesuai!');
            </script>";
        return false;
    }
}

// function untuk menambah data buku
function tambahbuku($data)
{
    $conn = koneksi();

    $nama_buku = strtolower(stripslashes($data["nama_buku"]));
    $body_buku = strtolower(stripslashes($data["body_buku"]));
    $kategori = strtolower(stripslashes($data["kategori"]));

    // cek apakah user tidak menguploud gambar
    if ($_FILES['gambar']['error'] === 4) {
        // pilih gambar default
        $gambar = 'nophoto.jpg';
    } else {
        // jalankan fungsi uploud
        $gambar = uploudbuku();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    // query insert data
    $query = "INSERT INTO tbl_buku
                VALUES
                ('', '$nama_buku', '$body_buku', '$gambar', '$kategori')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data buku
function hapusbuku($id)
{
    $conn = koneksi();

    // query mahasiswa berdasarkan id
    $bk = query("SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori WHERE id_buku = $id")[0];

    // cek jika gambar default
    if ($bk['gambar'] != 'nophoto.jpg') {
        // hapus gambar
        unlink('../../dashboardadmin/img/' . $bk['gambar']);
    }

    mysqli_query($conn, "DELETE FROM tbl_buku WHERE id_buku = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// function untuk mengubah data buku
function ubahbuku($data)
{
    $conn = koneksi();

    $id = $data["id_buku"];
    $nama_buku = strtolower(stripslashes($data["nama_buku"]));
    $body_buku = strtolower(stripslashes($data["body_buku"]));
    $gambarLama = strtolower(stripslashes($data["gambarLama"]));
    $kategori = $data['kategori'];

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploud();
    }

    // query update data
    $query = "UPDATE tbl_buku SET 
                nama_buku = '$nama_buku',
                body_buku = '$body_buku',
                gambar = '$gambar',
                id_kategori = '$kategori'
                WHERE id_buku = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk uploud buku
function uploudbuku()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../dashboardadmin/img/' . $namaFileBaru);

    return $namaFileBaru;
}

// function untuk cari data buku
function caribuku($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM tbl_buku NATURAL JOIN tbl_kategori
                WHERE
                nama_buku LIKE '%$keyword%' OR
                body_buku LIKE '%$keyword%'
                ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
