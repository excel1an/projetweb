<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ECE In</title>
  <link rel="stylesheet" href="styledebut.css">
</head>

<?php
include 'database.php';

if (isset($_POST['button2'])) {
    extract($_POST);

    if (!empty($idlogin) && !empty($mdplogin)) {
        $c2 = $database->prepare("SELECT * FROM utilisateur WHERE username = ?");
        $c2->bind_param("s", $idlogin);
        $c2->execute();
        $result2 = $c2->get_result()->fetch_assoc();

        if ($result2 !== null) {
            if ($mdplogin == $result2['mdp']) {
                echo "Le mot de passe est correct";

                $_SESSION['username'] = $result2['username'];
                $_SESSION['nom'] = $result2['nom'];
                $_SESSION['prenom'] = $result2['prenom'];
                $_SESSION['mail'] = $result2['mail'];

                // Redirection vers la page d'accueil après connexion réussie
                header("Location: index.php");
                exit();
            } else {
            	echo '<script>alert("Le mot de passe est incorrect !");</script>';
            }
        } else{
        echo '<script>alert("Pas de compte pour ce nom d utilisateur !");</script>';
        }

        $c2->close();
    }
}
?>

<body>
  <div class="container">
    <h1>Connexion</h1>
    <form method="post" action="connexion.php">
      <label for="username">Nom d'utilisateur :</label>
      <input type="text" id="idlogin" name="idlogin" required>

      <label for="password">Mot de passe :</label>
      <input type="password" id="mdplogin" name="mdplogin" required>

      <input type="submit" value="Se connecter" name="button2" class="center-button">

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
