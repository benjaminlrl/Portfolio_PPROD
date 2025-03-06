<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['langue'])) {
    $_SESSION['langue'] = $_GET['langue'];
}else{
    $_SESSION['langue'] = 'fr';
}

$langue = $_SESSION['langue'];
?>