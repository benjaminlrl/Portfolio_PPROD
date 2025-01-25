<?php
require 'sessionStart.php';
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = trim($_POST['user_email']);
    $password = trim($_POST['user_password']);

    // Se connecter à la base de données
    $pdo = getDbConnection();

    // Préparer la requête pour récupérer l'utilisateur par son email
    $stmt = $pdo->prepare("SELECT user_email, user_password, user_group FROM portfolio_users WHERE user_email = :user_email");
    $stmt->execute(['user_email' => $username]);

    // Récupérer les résultats
    $user = $stmt->fetch();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user['user_password'])) {
        // Connexion réussie
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['user_email'];
        $_SESSION['group'] = $user['user_group'];
        header("Location: succesLogin.php");
        exit;
    } else {
        $_SESSION['bul_email'] = $username;
        header("Location: echecLogin.php");
    }
}
?>