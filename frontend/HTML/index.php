<?php
  // Vérifier si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Vérifier si les champs sont remplis
      if (!empty($_POST['nomconnexion']) && !empty($_POST['motdepasseconnexion'])) {
          // Redirection vers une page HTML
          header("Location: accueil.php");
          echo "c'est zoooo";
          exit();
      } else {
          // Afficher un message d'erreur si les champs ne sont pas remplis
          echo "Veuillez remplir tous les champs du formulaire.";
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet"  href="../CSS/style.css">
</head>
<body>
    
  <img src="../IMG/logo.png" alt="logo" id="logo">
  <div class="containerconnexion" >
    <form method="POST" action="#" id="formulaire_connexion">
        <h1>Connexion</h1>
        <label for="nomconnexion">Identifiant:</label>
        <input type="text" id="nomconnexion" name="nomconnexion" required>
        <label for="motdepasseconnexion">Mot de passe :</label>
        <input type="password" id="motdepasseconnexion" name="motdepasseconnexion" required>
        <div class="submit" >
            <button  type="submit"  id="butconnexion">Se connecter</button>
            <button type="reset" id="butAnnuleconnexion">Annuler</button>
        </div>
        <a href="#" id="inscrlink" style="text-decoration: none;"> Cliquez ici pour vous inscrire !!!</a>
    </form>
  </div>
  <div class="containerinscription">
    <form method="POST" action="#" id="formulaire_inscription">
        <h1>Inscription</h1>
        <label for="nominscr">Nom :</label>
        <input type="text" id="nominscr" name="nominscr" required>

        <label for="Prenomsinscrip">Prenoms :</label>
        <input type="text" id="Prenomsinscrip" name="Prenomsinscrip" required>

        <label for="dateinscr">Date de naissance :</label>
        <input type="date" id="dateinscr" name="dateinscr" required>

        
        <label for="emailinscr">Email :</label>
        <input type="email" id="emailinscr" name="emailinscr" required>
        
        <label for="motdepasseinscrip">Mot de passe :</label>
        <input type="password" id="motdepasseinscrip" name="motdepasseinscrip" required>

        <div class="submit" >
            <button  type="submit"  id="butinscription">S'inscrire</button>
            <button type="reset" id="butAnnuleinscription">Annuler</button>
        </div>
    </form>
  </div>
  <script>
     $(document).ready(function() {
        $(".containerinscription").hide();
        $('#inscrlink').click(function() {
            //alert("Le bouton a été cliqué !");
            $('#logo').css({
                'width': '4vw',
                'position': 'absolute',
                'top':'2%',
            });
            $(".containerconnexion").hide();
            $(".containerinscription").show();
            });
        $("#butAnnuleinscription").click(function() {
        //alert("Le bouton a été cliqué !");
        //$('#formulaire_inscription input').val('');
        $(".containerinscription").hide();
        $(".containerconnexion").show();
        $('#logo').css({
                'width': '7vw',
                'position': 'absolute',
                'top':'10%',
            });
      });
      
      $('#butconnexion').click(function() {
        var isFormValid = true;
        $('#formulaire_connexion input').each(function() {
          if ($(this).val() === '') {
            isFormValid = false;
            return false; // Arrête la boucle si un champ est vide
          }
        });
       
        if (isFormValid) {
          //header("Location: ../HTML/accueil.html");

          // Ajoutez ici le code pour soumettre le formulaire ou effectuer d'autres actions
        } else {
          alert('Veuillez remplir tous les champs svp !');
        }
      });
      $('#butinscription').click(function() {
        var isFormValidinsc = true;
        $('#formulaire_inscription input').each(function() {
          if ($(this).val() === '') {
            isFormValidinsc = false;
            return false; // Arrête la boucle si un champ est vide
          }
        });

        if (isFormValidinsc) {
          alert('Inscription reussie !');
          // Ajoutez ici le code pour soumettre le formulaire ou effectuer d'autres actions
        } else {
          alert('Veuillez remplir tous les champs Svp !');
        }
      });
    });  
  </script>
</body>
</html>
