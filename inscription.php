
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

<?php
if (isset($_POST['button1'])) {
    if (!empty($_POST['password'])) {
        include 'database.php';
        
        $c = $database->prepare("SELECT * FROM utilisateur WHERE username = ?");
        $c->bind_param("s", $_POST['username']);
        $c->execute();
        $result = $c->get_result();

        $c1 = $database->prepare("SELECT * FROM utilisateur WHERE mail = ?");
        $c1->bind_param("s", $_POST['email']);
        $c1->execute();
        $result1 = $c1->get_result();
        
        if ($result->num_rows == 0) {
          if ($result1->num_rows == 0) {
            $q = $database->prepare("INSERT INTO utilisateur (username, mdp, mail, nom, prenom) VALUES (?, ?, ?, ?, ?)");

            if ($q === false) {
                die("Erreur de préparation de la requête: " . $database->error);
            }

            $q->bind_param("sssss", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['nom'], $_POST['prenom']);
            
            if ($q->execute()) {
                echo "Le compte a été créé";
                // Redirection vers la page "connexion.php"
                header("Location: connexion.php");
                exit(); // Assurez-vous de terminer le script après la redirection
            } else {
                echo "Erreur lors de l'enregistrement: " . $q->error;
            }

            $q->close();
        } else {
            echo "Un compte avec cet email existe déjà!";
        }
    }

        else {
            echo "Un compte avec ce nom d'utilisateur existe déjà!";
        }
        
  }$c->close();
  $c1->close();
}

?>


<body>

  <div class="container">
    <h1>Inscription</h1>
    <form name="loginForm" onsubmit="return validateForm()" action="inscription.php" method="post">
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
      <input type="submit" name="button1" value="S'inscrire">
      <input type="button" value="Annuler" onclick="window.location.href = 'connexion.php'">
    </form>



  </div>
  <div id="logo">
    <img src="img/logo grand.png" alt="Logo" style="height:150px">
  </div>
</body>
</html>
