
     <!-- Script de connexion -->
     <?php
         session_start();

             if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Vérification des données de connexion
                if($username == "MonNomUtilisateur" && $password == "MonMotDePasse") {
                  $_SESSION['username'] = $username;
                    header("Location: index.php");
                exit;
                } else {
                      $msg = "Nom d'utilisateur ou mot de passe incorrect.";
                    }
              }

              // Si l'utilisateur n'est pas connecté
              if(!isset($_SESSION['username'])) {
                  header("Location: login.php");
              exit;
                }
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <body>

     <!-- Formulaire de connexion -->
     <form action="login.php" method="post">
         <h4 class="form-signin-heading">
            <?php 
             echo $msg; 
             ?>
        </h4>
         <input type="text" name="username" placeholder="Nom d'utilisateur" required />
         <input type="password" name="password" placeholder="Mot de passe" required />
         <button type="submit" name="login">Connexion</button>
     </form>

</body>
</html>