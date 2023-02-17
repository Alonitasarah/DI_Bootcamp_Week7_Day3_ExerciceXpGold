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
  <form action="submit.php" method="post">
    <input type="text" name="username" placeholder="Enter your name" required />
    <button type="submit">Submit</button>
  </form>

  <?php
     session_start();

         // Vérifier si le formulaire a été soumis
         if(isset($_POST['username'])) {
             // Stocker le nom dans une variable de session
             $_SESSION['username'] = $_POST['username'];

             // Rediriger vers la page de bienvenue
             header("Location: welcome.php");
          exit;
            }

            // Si l'utilisateur n'est pas connecté
            if(!isset($_SESSION['username'])) {
                 header("Location: login.php");
              exit;
            }

            // Welcome.php
            session_start();

            // Vérifier si l'utilisateur est connecté
            if(isset($_SESSION['username'])) {
                 echo "Welcome, " . $_SESSION['username'];
                } else {
                echo "";
            }
   ?>

</body>
</html>