<?php
// Paramètres de connexion
$host = 'mysql-milay.alwaysdata.net';
$dbname = 'milay_db';
$username = 'milay';
$password = '@@Mamimamy00@@';

try {
    // Création d'une instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des attributs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // En cas d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
