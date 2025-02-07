<?php
require 'sessionStart.php';
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que les champs sont définis et non vides
    if (!empty($_POST['user_email']) && !empty($_POST['user_password']) && !empty($_POST['user_password_check'])) {
        $userEmail = trim($_POST['user_email']);
        $userPassword = trim($_POST['user_password']);
        $userPasswordCheck = trim($_POST['user_password_check']);

        // Vérifier si les emails correspondent
        if ($userPassword !== $userPasswordCheck) {
            echo "Les mots de passes ne correspondent pas.";
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
