<?php
require_once('dao/classes/administrateurDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['administrateur_id'])){
	header("Location: ".$url);
}

if(isset($_POST['deconnexion'])){
  if(session_destroy()){
    header("Location: ".$url);
  }
}

if(isset($_POST['modifier_administrateur'])){
	$_SESSION['modif_administrateur_id'] = $_POST['administrateur_id'];
	$_SESSION['modif_administrateur_nom'] = $_POST['administrateur_nom'];
	$_SESSION['modif_administrateur_prenom'] = $_POST['administrateur_prenom'];
	$_SESSION['modif_administrateur_super'] = $_POST['administrateur_super'];
	$_SESSION['modif_administrateur_telephone'] = $_POST['administrateur_telephone'];
	$_SESSION['modif_administrateur_email'] = $_POST['administrateur_email'];
	$_SESSION['modif_administrateur_adresse'] = $_POST['administrateur_adresse'];
	$_SESSION['modif_administrateur_ville'] = $_POST['administrateur_ville'];
	$_SESSION['modif_administrateur_code_postal'] = $_POST['administrateur_code_postal'];

	header("Location: ".$url."administrateur/administrateur-modification");
}

if(isset($_POST['modifier_jeune'])){
	$_SESSION['modif_jeune_id'] = $_POST['jeune_id'];
	$_SESSION['modif_jeune_nom'] = $_POST['jeune_nom'];
	$_SESSION['modif_jeune_prenom'] = $_POST['jeune_prenom'];
	$_SESSION['modif_jeune_telephone'] = $_POST['jeune_telephone'];
	$_SESSION['modif_jeune_email'] = $_POST['jeune_email'];
	$_SESSION['modif_jeune_adresse'] = $_POST['jeune_adresse'];
	$_SESSION['modif_jeune_ville'] = $_POST['jeune_ville'];
	$_SESSION['modif_jeune_code_postal'] = $_POST['jeune_code_postal'];

	header("Location: ".$url."administrateur/jeune-modification");
}

if(isset($_POST['modifier_partenaire'])){
	$_SESSION['modif_partenaire_id'] = $_POST['partenaire_id'];
	$_SESSION['modif_partenaire_siret'] = $_POST['partenaire_siret'];
	$_SESSION['modif_partenaire_nom'] = $_POST['partenaire_nom'];
	$_SESSION['modif_partenaire_telephone'] = $_POST['partenaire_telephone'];
	$_SESSION['modif_partenaire_email'] = $_POST['partenaire_email'];
	$_SESSION['modif_partenaire_adresse'] = $_POST['partenaire_adresse'];
	$_SESSION['modif_partenaire_ville'] = $_POST['partenaire_ville'];
	$_SESSION['modif_partenaire_code_postal'] = $_POST['partenaire_code_postal'];

	header("Location: ".$url."administrateur/partenaire-modification");
}

if(isset($_POST['suprimmer_administrateur'])){
	$administrateurDAO = new AdministrateurDAO();
	$administrateurDAO->suprimmerAdministrateur($_POST['administrateur_id']);

	header("Location: ".$url."administrateur/profil");
}

if(isset($_POST['suprimmer_jeune'])){
	$administrateurDAO = new AdministrateurDAO();
	$administrateurDAO->suprimmerJeune($_POST['jeune_id']);

	header("Location: ".$url."administrateur/profil");
}

if(isset($_POST['suprimmer_partenaire'])){
	$administrateurDAO = new AdministrateurDAO();
	$administrateurDAO->suprimmerPartenaire($_POST['partenaire_id']);

	header("Location: ".$url."administrateur/profil");
}

$administrateurDAO 	= new AdministrateurDAO();
$administrateur 	= $administrateurDAO->obtenirAdministrateur();
$jeune 				= $administrateurDAO->obtenirJeune();
$offre 				= $administrateurDAO->obtenirOffre();
$partenaire 		= $administrateurDAO->obtenirPartenaire();
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

    <form method="POST">
    	<h1>Tableau des administrateurs</h1>
     	<?php
    		if($_SESSION['administrateur_super'] == 1){
    			echo '<a href="'.$url."administrateur/inscription".'" class="btn btn-secondary my-2 my-sm-0">Ajouter</a>';
    		}
    	?>
	    <table class="table table-bordered" data-role="table" data-mode="columntoggle" id="tableau" data-filter="true" data-input="#recherche_input">
	    	<thead>
	    		<tr>
					<th scope="col">Nom</th>
					<th scope="col">Prénom</th>
					<th scope="col">Super Administrateur</th>
	        		<th scope="col">Téléphone</th> 
					<th scope="col">Email</th>
					<th scope="col">Dernière connexion</th>
					<th scope="col">Création</th>
				</tr>
			</thead>
	    <tbody>
			<?php
	    		while($resultat = $administrateur->fetch()){
	    			echo '<tr>';
						echo '<td>'.$resultat["administrateur_nom"].'</td>';
						echo '<td>'.$resultat["administrateur_prenom"].'</td>';
						if($resultat["administrateur_super"] == 1){
							echo '<td>Oui</td>';
						}else{
							echo '<td>Non</td>';
						}
	          			echo '<td>'.$resultat["administrateur_telephone"].'</td>';
						echo '<td>'.$resultat["administrateur_email"].'</td>';
						echo '<td>'.$resultat["administrateur_derniere_connexion"].'</td>';
						echo '<td>'.$resultat["administrateur_creation"].'</td>';
						echo '<input type="hidden" name="administrateur_id" value="'.$resultat["administrateur_id"].'">';
						echo '<input type="hidden" name="administrateur_nom" value="'.$resultat["administrateur_nom"].'">';
						echo '<input type="hidden" name="administrateur_prenom" value="'.$resultat["administrateur_prenom"].'">';
						echo '<input type="hidden" name="administrateur_super" value="'.$resultat["administrateur_super"].'">';
						echo '<input type="hidden" name="administrateur_telephone" value="'.$resultat["administrateur_telephone"].'">';
						echo '<input type="hidden" name="administrateur_email" value="'.$resultat["administrateur_email"].'">';
						echo '<input type="hidden" name="administrateur_adresse" value="'.$resultat["administrateur_adresse"].'">';
						echo '<input type="hidden" name="administrateur_ville" value="'.$resultat["administrateur_ville"].'">';
						echo '<input type="hidden" name="administrateur_code_postal" value="'.$resultat["administrateur_code_postal"].'">';
						if($_SESSION['administrateur_super'] == 1){
							echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_administrateur" value="Suprimmer"></td>';
							echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_administrateur" value="Modifier"></td>';
						}
					echo '</tr>';
	    		}
	    	?>
	    </tbody>
	    </table>

	    <h1>Tableau des partenaires</h1> <a href="<?= $url."partenaire/inscription" ?>" class="btn btn-secondary my-2 my-sm-0">Ajouter</a>
	    <table class="table table-bordered" data-role="table" data-mode="columntoggle" id="tableau" data-filter="true" data-input="#recherche_input">
	    	<thead>
	    		<tr>
					<th scope="col">SIRET</th>
					<th scope="col">Nom</th>
	        		<th scope="col">Téléphone</th> 
					<th scope="col">Email</th>
					<th scope="col">Dernière connexion</th>
					<th scope="col">Création</th>
				</tr>
			</thead>
	    <tbody>
			<?php
	    		while($resultat = $partenaire->fetch()){
	    			echo '<tr>';
						echo '<td>'.$resultat["partenaire_siret"].'</td>';
						echo '<td>'.$resultat["partenaire_nom"].'</td>';
	          			echo '<td>'.$resultat["partenaire_telephone"].'</td>';
						echo '<td>'.$resultat["partenaire_email"].'</td>';
						echo '<td>'.$resultat["partenaire_derniere_connexion"].'</td>';
						echo '<td>'.$resultat["partenaire_creation"].'</td>';
						echo '<input type="hidden" name="partenaire_id" value="'.$resultat["partenaire_id"].'">';
						echo '<input type="hidden" name="partenaire_siret" value="'.$resultat["partenaire_siret"].'">';
						echo '<input type="hidden" name="partenaire_nom" value="'.$resultat["partenaire_nom"].'">';
						echo '<input type="hidden" name="partenaire_telephone" value="'.$resultat["partenaire_telephone"].'">';
						echo '<input type="hidden" name="partenaire_email" value="'.$resultat["partenaire_email"].'">';
						echo '<input type="hidden" name="partenaire_adresse" value="'.$resultat["partenaire_adresse"].'">';
						echo '<input type="hidden" name="partenaire_ville" value="'.$resultat["partenaire_ville"].'">';
						echo '<input type="hidden" name="partenaire_code_postal" value="'.$resultat["partenaire_code_postal"].'">';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_partenaire" value="Suprimmer"></td>';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_partenaire" value="Modifier"></td>';
					echo '</tr>';
	    		}
	    	?>
	    </tbody>
	    </table>
	 
	    <h1>Tableau des jeunes</h1> <a href="<?= $url."jeune/inscription" ?>" class="btn btn-secondary my-2 my-sm-0">Ajouter</a>
	    <table class="table table-bordered" data-role="table" data-mode="columntoggle" id="tableau" data-filter="true" data-input="#recherche_input">
	    	<thead>
	    		<tr>
					<th scope="col">Nom</th>
					<th scope="col">Prénom</th>
	        		<th scope="col">Téléphone</th> 
					<th scope="col">Email</th>
					<th scope="col">Dernière connexion</th>
					<th scope="col">Création</th>
				</tr>
			</thead>
	    <tbody>
			<?php
	    		while($resultat = $jeune->fetch()){
	    			echo '<tr>';
						echo '<td>'.$resultat["jeune_nom"].'</td>';
						echo '<td>'.$resultat["jeune_prenom"].'</td>';
	          			echo '<td>'.$resultat["jeune_telephone"].'</td>';
						echo '<td>'.$resultat["jeune_email"].'</td>';
						echo '<td>'.$resultat["jeune_derniere_connexion"].'</td>';
						echo '<td>'.$resultat["jeune_creation"].'</td>';
						echo '<input type="hidden" name="jeune_id" value="'.$resultat["jeune_id"].'">';
						echo '<input type="hidden" name="jeune_nom" value="'.$resultat["jeune_nom"].'">';
						echo '<input type="hidden" name="jeune_prenom" value="'.$resultat["jeune_prenom"].'">';
						echo '<input type="hidden" name="jeune_telephone" value="'.$resultat["jeune_telephone"].'">';
						echo '<input type="hidden" name="jeune_email" value="'.$resultat["jeune_email"].'">';
						echo '<input type="hidden" name="jeune_adresse" value="'.$resultat["jeune_adresse"].'">';
						echo '<input type="hidden" name="jeune_ville" value="'.$resultat["jeune_ville"].'">';
						echo '<input type="hidden" name="jeune_code_postal" value="'.$resultat["jeune_code_postal"].'">';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_jeune" value="Suprimmer"></td>';
						echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_jeune" value="Modifier"></td>';
					echo '</tr>';
	    		}
	    	?>
	    </tbody>
	    </table>

	    <h1>Tableau des offres</h1>
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
	    		while($resultat = $offre->fetch()){
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
	</form>
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