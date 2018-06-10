<?php
require('dao/classes/OffreDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(isset($_POST['deconnexion'])){
  if(session_destroy()){
    header("Location: ".$url);
  }
}

$offreDAO = new OffreDAO();
$requete = $offreDAO->lister();
?>

<!DOCTYPE html>
<html>
  <head lang="FR">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="/ressources/css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= $url ?>">PPE 2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administrateur
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= $url.'administrateur/connexion' ?>">Connexion</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= $url.'administrateur/profil' ?>">Profil</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partenaire
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= $url.'partenaire/connexion' ?>">Connexion</a>
              <a class="dropdown-item" href="<?= $url.'partenaire/inscription' ?>">Inscription</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= $url.'partenaire/profil' ?>">Profil</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jeune
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= $url.'jeune/connexion' ?>">Connexion</a>
              <a class="dropdown-item" href="<?= $url.'jeune/inscription' ?>">Inscription</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= $url.'jeune/profil' ?>">Profil</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST">
          <input class="btn btn-secondary my-2 my-sm-0" type="submit" name="deconnexion" value="Déconnexion">
        </form>
      </div>
    </nav>

    <div id="map" style="width:100%;height:400px;"></div><br/>
    <input type="text" name="" placeholder="Quel type de formation?">
    <input type="text" name="" placeholder="Où?">
    <input type="submit" name="" value="Rechercher">
    <h1>Tableau des offres</h1>
    <table class="table table-bordered" data-role="table" data-mode="columntoggle" id="tableau" data-filter="true" data-input="#recherche_input">
    	<thead>
    		<tr>
				<th scope="col">Type de Formation</th>
				<th scope="col">Nom</th>
        <th scope="col">Partenaire</th> 
				<th scope="col">Début</th>
				<th scope="col">Fin</th>
				<th scope="col">Création</th>
			</tr>
		</thead>
    <tbody id="offreBody">
		<?php
    		while($resultat = $requete->fetch()){
    			echo '<tr>';
  					echo '<td>'.$resultat["formation_nom"].'</td>';
  					echo '<td>'.$resultat["offre_nom"].'</td>';
            echo '<td>'.$resultat["partenaire_nom"].'</td>';
  					echo '<td>'.$resultat["offre_debut"].'</td>';
  					echo '<td>'.$resultat["offre_fin"].'</td>';
  					echo '<td>'.$resultat["offre_creation"].'</td>';
				echo '</tr>';
    		}
    	?>
    </tbody>
    </table>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; Cheik-Siramakan Keita 2018</span>
      </div>
    </footer>

    <script src="/ressources/ajax/js/ajax-core.js"></script>
    <script src="/ressources/js/core.js"></script>
    <script src="/ressources/js/tablesorting.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSWaHpZ1NPnlUJC6OE45NqHJVwGOHwhmc&callback=map"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>