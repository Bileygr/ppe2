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
  $_SESSION['modif_administrateur_id']          = $_POST['administrateur_id'];
  $_SESSION['modif_administrateur_nom']         = $_POST['administrateur_nom'];
  $_SESSION['modif_administrateur_prenom']      = $_POST['administrateur_prenom'];
  $_SESSION['modif_administrateur_super']       = $_POST['administrateur_super'];
  $_SESSION['modif_administrateur_telephone']   = $_POST['administrateur_telephone'];
  $_SESSION['modif_administrateur_email']       = $_POST['administrateur_email'];
  $_SESSION['modif_administrateur_adresse']     = $_POST['administrateur_adresse'];
  $_SESSION['modif_administrateur_ville']       = $_POST['administrateur_ville'];
  $_SESSION['modif_administrateur_code_postal'] = $_POST['administrateur_code_postal'];

  header("Location: ".$url."administrateur/administrateur-modification");
}

if(isset($_POST['suprimmer_administrateur'])){
  $administrateurDAO = new AdministrateurDAO();
  $administrateurDAO->suprimmerAdministrateur($_POST['administrateur_id']);

  header("Location: ".$url."administrateur/profil");
}

$administrateurDAO  = new AdministrateurDAO();
$administrateur     = $administrateurDAO->obtenirAdministrateur();
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
    <link href="/ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/ressources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/ressources/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?= $url ?>">PPE2</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.html">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?= $url."administrateur/graphes/offre" ?>">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">Graphes</span>
            </a>
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
            <i class="fa fa-table"></i> Administrateurs</div>
          <div class="card-body">
            <div class="table-responsive">
              <form method="POST">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Super Administrateur</th>
                      <th scope="col">Téléphone</th> 
                      <th scope="col">Email</th>
                      <th scope="col">Dernière connexion</th>
                      <th scope="col">Création</th>
                      <?php if($_SESSION['administrateur_super'] == 1){
                        echo '<th scope="col">Modifier</th>';
                        echo '<th scope="col">Suprimmer</th>';
                        } 
                      ?>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Super Administrateur</th>
                      <th scope="col">Téléphone</th> 
                      <th scope="col">Email</th>
                      <th scope="col">Dernière connexion</th>
                      <th scope="col">Création</th>
                      <?php if($_SESSION['administrateur_super'] == 1){
                        echo '<th scope="col">Modifier</th>';
                        echo '<th scope="col">Suprimmer</th>';
                        } 
                      ?>
                    </tr>
                  </tfoot>
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
                          echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="modifier_administrateur" value="Modifier"></td>';
                          echo '<td><input class="btn btn-secondary my-2 my-sm-0" type="submit" name="suprimmer_administrateur" value="Suprimmer"></td>';
                        }
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
