<?php
require_once('dao/classes/administrateurDAO.php');
session_start();

$url            = "http://localhost:8000/ppe2/";
$url_ressources = "http://localhost/ppe2/";

if(!isset($_SESSION['administrateur_id'])){
  header("Location: ".$url);
}

if(isset($_POST['deconnexion'])){
  if(session_destroy()){
    header("Location: ".$url);
  }
}

if(isset($_POST['modifier_partenaire'])){
  $_SESSION['modif_partenaire_id']          = $_POST['partenaire_id'];
  $_SESSION['modif_partenaire_siret']       = $_POST['partenaire_siret'];
  $_SESSION['modif_partenaire_nom']         = $_POST['partenaire_nom'];
  $_SESSION['modif_partenaire_telephone']   = $_POST['partenaire_telephone'];
  $_SESSION['modif_partenaire_email']       = $_POST['partenaire_email'];
  $_SESSION['modif_partenaire_adresse']     = $_POST['partenaire_adresse'];
  $_SESSION['modif_partenaire_ville']       = $_POST['partenaire_ville'];
  $_SESSION['modif_partenaire_code_postal'] = $_POST['partenaire_code_postal'];

  header("Location: ".$url."administrateur/partenaire-modification");
}

if(isset($_POST['suprimmer_partenaire'])){
  $administrateurDAO = new AdministrateurDAO();
  $administrateurDAO->suprimmerPartenaire($_POST['partenaire_id']);

  header("Location: ".$url."administrateur/profil");
}

$administrateurDAO  = new AdministrateurDAO();
$partenaire         = $administrateurDAO->obtenirPartenaire();
$last_update        = $administrateurDAO->obtenirMiseAJourTemps();
?>
<!DOCTYPE html>
<html lang="FR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Cheik-Siramakan Keita">
    <title>Administrateur Profil</title>

    <!-- CSS -->
    <link href="/ressources/vendor/bootstrap/css/bootstrap.min.css"  rel="stylesheet">
    <link href="/ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/ressources/vendor/datatables/dataTables.bootstrap4.css"  rel="stylesheet">
    <link href="/ressources/css/sb-admin.css"  rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?= $url ?>">Bonjour <?= $_SESSION["administrateur_prenom"]." ".$_SESSION["administrateur_nom"] ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?= $url."administrateur/statistique" ?>">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">Graphes</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseGrapheLink">
              <li>
                <a href="<?= $url."administrateur/graphe/administrateur" ?>">Administrateurs</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/graphe/partenaire" ?>">Partenaires</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/graphe/jeune" ?>">Jeunes</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/graphe/offre" ?>">Offres</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableaux">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTableauxLink" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Tableaux</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseTableauxLink">
              <li>
                <a href="<?= $url."administrateur/tableau/administrateur" ?>">Administrateurs</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/tableau/partenaire" ?>">Partenaires</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/tableau/jeune" ?>">Jeunes</a>
              </li>
              <li>
                <a href="<?= $url."administrateur/tableau/offre" ?>">Offres</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableaux">
            <a class="nav-link" href="<?= $url."administrateur/modifier-mes-informations" ?>">
              <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Modifier vos informations</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Tableau de bord</a>
          </li>
          <li class="breadcrumb-item active">Tableaux</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Partenaires <input class="btn btn-secondary my-2 my-sm-0 float-right" type="submit" name="modifier_administrateur" onclick="window.location.href='<?= $url."partenaire/inscription" ?>'" value="Ajouter"></div>
          <div class="card-body">
            <div class="table-responsive">
              <form method="POST">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">SIRET</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Dernière connexion</th>
                      <th scope="col">Création</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th scope="col">SIRET</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Dernière connexion</th>
                      <th scope="col">Création</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Suprimmer</th>
                    </tr>
                  </tfoot>
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
                        echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_partenaire" value="Modifier"></td>';
                        echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_partenaire" value="Suprimmer"></td>';
                      echo '</tr>';
                    } 
                  ?>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Dernier ajout <?= $last_update ?> </div>
        </div>
      </div>

      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Cheik-Siramakan Keita 2018</small>
          </div>
        </div>
      </footer>

      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Prêt à quitter?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Cliquez sur "Déconnexion" si vous êtes prêt a terminer vôtre session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
              <form method="POST">
                <input type="submit" class="btn btn-primary" name="deconnexion" value="Déconnexion">
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- JavaScript -->
      <script src="/ressources/js/core.js"></script>
      <script src="/ressources/vendor/jquery/jquery.min.js"></script>
      <script src="/ressources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/ressources/vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="/ressources/vendor/datatables/jquery.dataTables.js"></script>
      <script src="/ressources/vendor/datatables/dataTables.bootstrap4.js"></script>
      <script src="/ressources/js/sb-admin.min.js"></script>
      <script src="/ressources/js/sb-admin-datatables.min.js"></script>
    </div>
  </body>
</html>