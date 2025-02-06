<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['langue'])) {
    $_SESSION['langue'] = $_GET['langue'];
}

if (!isset($_SESSION['langue'])) {
    $_SESSION['langue'] = 'français';
}

$langue = $_SESSION['langue'];
?>