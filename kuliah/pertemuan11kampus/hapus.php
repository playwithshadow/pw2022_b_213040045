<?php
require 'functions.php';

// hapus data
$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapuskan!');
            document.location.href = 'kuliah_latihan1.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapuskan!');
            document.location.href = 'kuliah_latihan1.php';
        </script>
    ";
}
