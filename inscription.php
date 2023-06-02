<!DOCTYPE html>
<html>
<head>
  <title>S'inscrire</title>
  <script>
    function validateForm() {
      var password = document.forms["loginForm"]["password"].value;
      var password2 = document.forms["loginForm"]["password2"].value;

      if (password !== password2) {
        alert("Les mots de passe ne correspondent pas !");
        return false; // Empêche la soumission du formulaire si les mots de passe ne correspondent pas
      }
    }
  </script>
  <link rel="stylesheet" href="styledebut.css">
</head>
<body>
  <div class="container">
    <h1>Inscription</h1>
    <form name="loginForm" onsubmit="return validateForm()" action="connexion.php" method="POST">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" placeholder="Martin" required>
      <label for="prenom"> Prénom : </label>
      <input type="text" id="prenom" name="prenom" placeholder="Marc"required>
      <label for="email"> Adresse mail : </label>
      <input type="text" id="email" name="email" placeholder="marc.martin@gmail.com"required>
      <label for="username"> Nom d'utilisateur : </label>
      <input type="text" id="username" name="username" placeholder="marcmartin"required>
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" placeholder="motdepasse"required>
      <label for="password"> Confirmer mot de passe : </label>
      <input type="password" id="password2" name="password2" placeholder="motdepasse" required>
      <input type="submit" value="S'inscrire">
      <input type="button" value="Annuler" onclick="window.location.href = 'connexion.php'">
    </form>

    <?php
        if(isset($_POST['formsend']))

    ?>

  </div>
  <div id="logo">
    <img src="img/logo grand.png" alt="Logo" style="height:150px">
  </div>
</body>
</html>
