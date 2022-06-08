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

$id = $_GET["id"];

if (hapusbuku($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'tabelbuku.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'tabelbuku.php';
        </script>
    ";
}
