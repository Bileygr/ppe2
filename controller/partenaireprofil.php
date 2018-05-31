<?php
require_once('dao/classes/partenaireDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['partenaire_id'])){
	header("Location: ".$url);
}

$partenaireDAO = new PartenaireDAO();
$requete = $partenaireDAO->getOffre($_SESSION['partenaire_id']);

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
  <head lang="FR">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        	<input id="recherche_input" data-type="search" class="form-control mr-sm-2" onkeyup="filterTable();" aria-label="Search" placeholder="Recherche">
        	<input class="btn btn-secondary my-2 my-sm-0" type="submit" name="deconnexion" value="Déconnexion">
        </form>
      </div>
    </nav>


    <h1>Tableau des offres de <?php $_SESSION['partenaire_nom'] ?></h1> <a href="<?= $url."partenaire/inscription" ?>" class="btn btn-secondary my-2 my-sm-0">Ajouter</a>
	    <table class="table table-bordered" data-role="table" data-mode="columntoggle" id="tableau" data-filter="true" data-input="#recherche_input">
	    	<thead>
	    		<tr>
					<th scope="col">Type de formation</th>
					<th scope="col">Nom</th>
	        		<th scope="col">Partenaire</th> 
					<th scope="col">Début</th>
					<th scope="col">Fin</th>
					<th scope="col">Création</th>
				</tr>
			</thead>
	    <tbody>
			<?php
	    		while($resultat = $requete->fetch()){
	    			echo '<tr>';
						echo '<td>'.$resultat["formation_nom"].'</td>';
						echo '<td>'.$resultat["offre_nom"].'</td>';
	          			echo '<td>'.$resultat["partenaire_nom"].'</td>';
						echo '<td>'.$resultat["offre_debut"].'</td>';
						echo '<td>'.$resultat["offre_fin"].'</td>';
						echo '<td>'.$resultat["offre_creation"].'</td>';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_partenaire" value="Suprimmer"></td>';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_partenaire" value="Modifier"></td>';
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

    <script src="/ressources/js/core.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSWaHpZ1NPnlUJC6OE45NqHJVwGOHwhmc&callback=map"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>