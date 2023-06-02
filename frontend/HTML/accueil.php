<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet"  href="../CSS/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-d4fD6s4ogt5DjB9XwPxmp+eLQOeL5alTjdqPf9HXuSC2xK8AeWs9g4elGDW7vAWv7y+Puh9FkbEbaZS1Qom+Ig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>

  <div class="navbar">
    <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#enroler">S'enroler</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>
<div class="presentation">
  <h2 id="accueil">A PROPOS</h2>
  <div class="pre_obj">
    <div class="present_oneci">
      <h3>PRESENTATION DE L'ONECI</h3>
      <p>L'identification des personnes vivant en Côte d'Ivoire a toujours été une préoccupation majeure pour tous les gouvernements depuis l'indépendance. La Côte d'Ivoire a marqué sa volonté de maîtriser sa population à travers diverses lois et structures chargées de la mise en œuvre des projets d'identification des personnes.</p>
      <p>L'Office National de l'Etat Civil et de l'Identification (ONECI) a été créé en 2019 par le décret N° 2019-458 du 22 mai 2019 en lieu et place de l'Office National de l'Identification (ONI) dissout conformément au décret N°2019-459 du 22 mai 2019.</p>
    </div>
    <div class="Objectif_oneci">
      <h3>NOS OBJECTIFS</h3>
      <ul>
          <li>la mise en oeuvre de la politique de l'état civil en liaison avec les officiers, les agents d'état civil et les autorités judiciaires</li>
          <li>l'identification des personnes résidant en Côte d'Ivoire.</li>
      </ul>
    </div>
  </div>
  
</div>
<hr>
<div id="enrolement">
  <h2 id="enroler">ATTRIBUTION D'UN CNI</h2>
  <p>Remplissez le formulaire pour effectuer une demande d'attribution de CNI</p>
  <div class="enreollementform">
    <form method="POST" action="#" id="formulaire_enrolement">
        <h1>Enrolement</h1>
        <label for="nomenre">Nom </label>
        <input type="text" id="nomenre" name="nomenre" required>

        <label for="Prenomsenre">Prenoms </label>
        <input type="text" id="Prenomsenre" name="Prenomsenre" required>

        <label for="dateenre">Date de naissance </label>
        <input type="date" id="dateenre" name="dateenre" required>

        
        <label for="emailenre">Email </label>
        <input type="email" id="emailenre" name="emailenre" required>
        
        <label for="motdepasseenre">Mot de passe </label>
        <input type="password" id="motdepasseenre" name="motdepasseenre" required>

        <div class="submit" >
            <button  type="submit"  id="butenre">S'enroller</button>
            <button type="reset" id="butAnnuleenre">Annuler</button>
        </div>
    </form>
  </div>
</div>
<hr>
<h2 id="contact">CONTACTER LA STRUCTURE</h2>
<p id="para_contact">Remplissez le formulaire pour nous contacter</p>
<div class="containercontac" >
    <form method="POST" action="#" id="formulaire_contact">
        <h1>Nous contacter</h1>
        <label for="nomcontact">Nom</label>
        <input type="text" id="nomcontact" name="nomcontact" required>
        <label for="prenomcontact">prenom</label>
        <input type="text" id="prenomcontact" name="prenomcontact" required>
        <label for="commentairecontact">Commentaire </label>
        <textarea name="commentairecontact" id="commentairecontact" cols="30" rows="10" required></textarea>
        <div class="submit" >
            <button  type="submit"  id="butcontact">Soumettre</button>
            <button type="reset" id="butAnnulecontact">Annuler</button>
        </div>
    </form>
  </div> 
  <a href="#" class="retour-haut">Ac</a>
  <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();
                var elementOffset = $('#enroler').offset().top;
                var distance = (elementOffset - scrollTop);
                
                if (distance < 100) { // Personnalisez cette valeur pour ajuster le moment où le bouton est affiché
                    $('.retour-haut').show();
                } else {
                    $('.retour-haut').hide();
                }
            });
        });
    </script>
</body>
</html>