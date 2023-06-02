<!DOCTYPE html>
<html>
<head>
  <title>ECE In</title>
  <link rel="stylesheet" href="styledebut.css">
</head>
<body>
  <div class="container">
    <h1>Connexion</h1>
    <form>
      <label for="username">Nom d'utilisateur ou adresse e-mail :</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>

      <input  type="submit" formaction="index.php" value="Se connecter" class="center-button">

      <div class="register-link">
        <span>Pas encore de compte ?</span>
        <a href="inscription.php">Inscrivez-vous</a>
      </div>
    </form>
  </div>
  <div id="logo">
        <img src="img/logo grand.png" alt="Logo">
  </div>
</body>
</html>
