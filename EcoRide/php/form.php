<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Connexion</title>

  <link rel="stylesheet" href="/css/form.css" />
</head>

<body>

  <div class="container">
    <input type="checkbox" id="check" />
    <div class="login form">


      <header>Connexion</header>

      <form method="post" action="/php/login.php">
        <input type="email" placeholder="Email" id="email" name="email" required />
        <input type="password" placeholder="Mot de passe" id="password" name="password" required />
        <a href="#">Mot de passe oublié ?</a>
        <input type="submit" class="button" value="Connexion" name="ok" />
      </form>
      <div class="signup">
        <span class="signup">Pas de compte ?
          <label for="check">Inscrivez vous</label>
        </span>
      </div>
    </div>


    <div class="registration form">


      <header>Inscription</header>

      <form method="post" action="/php/traitement.php">
        <input type="text" name="email" placeholder="Entrez votre email" required />
        <input type="password" name="pass" placeholder="Créez votre mot de passe" required />
        <input type="text" name="pseudo" placeholder="Entrez votre pseudo" required />

        <input type="submit" name="ok" class="button" value="Inscrivez vous" />
      </form>
      <div class="signup">
        <span class="signup">Vous avez deja un compte ?
          <label for="check">Connexion</label>
        </span>
      </div>
    </div>
  </div>
</body>

</html>