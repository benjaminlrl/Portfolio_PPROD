<?php
define('DB_SERVER', '91.216.107.187');   // L'adresse du serveur MySQL
define('DB_USERNAME', 'benja2535212');       // Nom d'utilisateur de la base de données
define('DB_PASSWORD', 'xZ3_YAtpeVzKA3M');           // Mot de passe de l'utilisateur de la base de données
define('DB_NAME', 'benja2535212');        // Nom de la base de données à utiliser

// Fonction de connexion à la base de données
function getDbConnection() {
    // Tentative de connexion à la base de données
    try {
        $dsn = 'mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME . ';charset=utf8';
        $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        // En cas d'échec de la connexion, on affiche un message d'erreur
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
?>