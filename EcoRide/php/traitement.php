<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (isset($_POST['ok'])) {
    extract($_POST);

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :email, :pseudo, :pass)");
    $requete->execute(
        array(
            "email" => $email,
            "pseudo" => $pseudo,
            "pass" => $pass
        )
    );
    echo "Inscription réussie !";
}
