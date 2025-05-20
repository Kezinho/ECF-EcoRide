

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != "") {
        $req = $bdd->query("SELECT * FROM users WHERE email = '$email' AND pass = '$password'");
        $rep = $req->fetch();

        if ($rep && isset($rep['id'])) {
            echo "Connexion réussie, redirection...";
            header("Location: /php/success.php");
            exit();
        } else {
            echo "Email ou mot de passe incorrect !";
            $error_msg = "Email ou mot de passe incorrect !";
        }
    }
}
?>