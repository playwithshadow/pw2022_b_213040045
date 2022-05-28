<?php
require '../../config/functions.php';

$id = $_GET["id"];

if (hapusadmin($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'tabeladmin.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'tabeladmin.php';
        </script>
    ";
}
