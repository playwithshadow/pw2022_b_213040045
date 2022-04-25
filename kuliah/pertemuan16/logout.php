<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>
            alert('Anda sudah logout!');
            document.location.href = 'login.php';
        </script>";
exit;
