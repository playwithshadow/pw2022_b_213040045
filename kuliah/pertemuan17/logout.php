<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// cara menghapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

echo "<script>
            alert('Anda sudah logout!');
            document.location.href = 'login.php';
        </script>";
exit;
