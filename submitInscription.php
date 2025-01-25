<?php
require 'sessionStart.php';
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que les champs sont définis et non vides
    if (!empty($_POST['user_email']) && !empty($_POST['user_email_check']) && !empty($_POST['user_password'])) {
        $userEmail = trim($_POST['user_email']);
        $userEmailCheck = trim($_POST['user_email_check']);
        $userPassword = trim($_POST['user_password']);

        // Vérifier si les emails correspondent
        if ($userEmail !== $userEmailCheck) {
            echo "Les adresses email ne correspondent pas.";
            exit;
        }

        // Hacher le mot de passe
        $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

        try {
            // Connexion à la base de données
            $pdo = getDbConnection();

            // Insérer l'utilisateur dans la base de données
            $stmt = $pdo->prepare("INSERT INTO portfolio_users (user_email, user_password) VALUES (:user_email, :user_password)");
            $stmt->execute([
                'user_email' => $userEmail,
                'user_password' => $hashedPassword
            ]);

            // Rediriger vers la page principale
            header("Location: succesInscription.php");
            exit;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            exit;
        }
    } else {
        echo "Tous les champs doivent être remplis.";
        exit;
    }
}
?>
