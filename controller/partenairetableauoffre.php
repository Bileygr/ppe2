<?php
require_once('dao/classes/offreDAO.php');
session_start();

$url = "http://localhost:8000/ppe2/";

if(!isset($_SESSION['partenaire_id'])){
	header("Location: ".$url);
}

if(isset($_POST['deconnexion'])){
  if(session_destroy()){
    header("Location: ".$url);
  }
}

if(isset($_POST['modifier'])){
  $_SESSION['modifier_offre_id']           = $_POST['offre_id'];
  $_SESSION['modifier_formation_id']       = $_POST['formation_id'];
  $_SESSION['modifier_formation_nom']      = $_POST['formation_nom'];
  $_SESSION['modifier_offre_nom']          = $_POST['offre_nom'];
  $_SESSION['modifier_offre_description']  = $_POST['offre_description'];
  $_SESSION['modifier_offre_debut']        = $_POST['offre_debut'];
  $_SESSION['modifier_offre_fin']          = $_POST['offre_fin'];
  $_SESSION['modifier_offre_creation']     = $_POST['offre_creation'];

  header("Location: ".$url."partenaire/offre-modification");
}

if(isset($_POST['suprimmer'])){
  $offreDAO = new OffreDAO();
  $offreDAO->suprimmer($_POST['offre_id']);

  header("Location: ".$url."partenaire/profil");
}

$offreDAO = new OffreDAO();
$offre = $offreDAO->listerParPartenaire($_SESSION['partenaire_id']);
?>
<!DOCTYPE html>
<html lang="FR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Cheik-Siramakan Keita">
    <title>Partenaire Offres</title>

    <!-- CSS -->
    <link href="/ressources/vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet">
    <link href="/ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/ressources/vendor/datatables/dataTables.bootstrap4.css"  rel="stylesheet">
    <link href="/ressources/css/sb-admin.css"  rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?= $url ?>">Bonjour <?= $_SESSION["partenaire_nom"] ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?= $url."partenaire/profil" ?>">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">Graphes</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableaux">
            <a class="nav-link" href="<?= $url."partenaire/offre" ?>">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Tableau</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableaux">
            <a class="nav-link" href="<?= $url."partenaire/modifier-mes-informations" ?>">
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
            <p>Tableau de bord</p>
          </li>
          <li class="breadcrumb-item active">Tableau</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Offres <input class="btn btn-secondary my-2 my-sm-0 float-right" type="submit" name="modifier_administrateur" onclick="window.location.href='<?= $url."offre/ajout" ?>'" value="Ajouter"></div>
          <div class="card-body">
            <div class="table-responsive">
              <form method="POST">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Type de formation</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Partenaire</th>
                      <th scope="col">Début</th>
                      <th scope="col">Fin</th>
                      <th scope="col">Création</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th scope="col">Type de formation</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Partenaire</th>
                      <th scope="col">Début</th>
                      <th scope="col">Fin</th>
                      <th scope="col">Création</th>
                      <th scope="col">Modifier</th>
                      <th scope="col">Suprimmer</th>
                    </tr>
                  </tfoot>
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
                        echo '<form method="POST">'; 
                          echo '<input type="hidden" name="offre_id" value="'.$resultat["offre_id"].'">';
                          echo '<input type="hidden" name="formation_id" value="'.$resultat["formation_id"].'">';
                          echo '<input type="hidden" name="offre_nom" value="'.$resultat["offre_nom"].'">';
                          echo '<input type="hidden" name="partenaire_nom" value="'.$resultat["partenaire_nom"].'">';
                          echo '<input type="hidden" name="offre_description" value="'.$resultat["offre_description"].'">';
                          echo '<input type="hidden" name="offre_debut" value="'.$resultat["offre_debut"].'">';
                          echo '<input type="hidden" name="offre_fin" value="'.$resultat["offre_fin"].'">';
                          echo '<input type="hidden" name="offre_creation" value="'.$resultat["offre_creation"].'">';
                          echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier" value="Modifier"></td>';
                          echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer" value="Suprimmer"></td>';
                        echo '</form>';
                      echo '</tr>';
                    } 
                  ?>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
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