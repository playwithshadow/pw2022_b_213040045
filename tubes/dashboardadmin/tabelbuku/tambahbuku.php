<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Login Terlebih Dahulu');
            document.location.href = '../../login/login.php';
        </script>
        ";
    exit;
}

require '../../config/functions.php';

$kategori = query("SELECT * FROM tbl_kategori");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST["tambah"])) {
    if (tambahbuku($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tabelbuku.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'tabelbuku.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku - VAN TECH</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo.png" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Core-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Css saya -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Form Registrasi center  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card shadow-lg">
                    <div class="fw-bolder fs-4 card-header text-center bg-primary text-light">Form Tambah Buku - VAN TECH</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group row mb-3">
                                <label for="nama_buku" class="col-md-4 col-form-label text-md-right">Nama Buku</label>
                                <div class="col-md-8">
                                    <input type="text" id="nama_buku" class="form-control" name="nama_buku" placeholder="masukkan nama buku" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="body_buku" class="col-md-4 col-form-label text-md-right">Isi Buku</label>
                                <div class="col-md-8">
                                    <input type="text" id="body_buku" class="form-control" name="body_buku" placeholder="masukkan isi buku" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar Buku</label>
                                <img src="" class="img-thumbnail" style="width: 150px; display: none; margin-bottom: 25px;" id="img-preview">
                                <div class="col-md-8">
                                    <input type="file" id="gambar" class="form-control" name="gambar" onchange="previewImage();">
                                </div>
                            </div>
                            <!-- buatkan select option untuk kategori buku berdasarkan nama kategori dan menggunakan php didalamnya -->
                            <div class="form-group row mb-3">
                                <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>
                                <div class="col-md-8">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k["id_kategori"]; ?>"><?= $k["nama_kategori"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto py-3">
                                    <button class="btn btn-primary" name="tambah">Tambah Data Buku</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="../../assets/js/scripts.js"></script>
<script src="../../assets/js/previewimg.js"></script>

</html>