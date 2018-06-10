<?php
require_once('dao/classes/offreDAO.php');
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

$offreDAO     = new OffreDAO();
$offre        = $offreDAO->formationChart();
$partenaire   = $offreDAO->partenaireChart();
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
          <li class="breadcrumb-item active">Graphiques</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header"><i class="fa fa-pie-chart"></i> Statistiques en camembert</div>
            <table>
              <tr>
                <td><div id="piechart" style="border: 1px solid #ccc"></div></td>
                <td><div id="partenaireStat" style="border: 1px solid #ccc"></div></td>
              </tr>
            </table>
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
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(partenaireChart);
        
        function drawChart() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
           <?php 
              while($resultat = $offre->fetch()){
                echo '["'.$resultat["formation_nom"].'", '.$resultat["COUNT(*)"].'], ';
              }
            ?>
          ]);
          var options = {'title':'Offre par formation', 'width':800, 'height':700};
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }

        function partenaireChart() {
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
           <?php  
              while($resultat = $partenaire->fetch()){
                echo '["'.$resultat["partenaire_nom"].'", '.$resultat["COUNT(*)"].'], ';
              } 
            ?> 
          ]);
          var options = {'title':'Offre par partenaire', 'width':800, 'height':700};
          var chart = new google.visualization.PieChart(document.getElementById('partenaireStat'));
          chart.draw(data, options);
        }
      </script>
      <script src="/ressources/js/core.js" ></script>
      <script src="/ressources/vendor/jquery/jquery.min.js" ></script>
      <script src="/ressources/vendor/bootstrap/js/bootstrap.bundle.min.js" ></script>
      <script src="/ressources/vendor/jquery-easing/jquery.easing.min.js" ></script>
      <script src="/ressources/vendor/datatables/jquery.dataTables.js" ></script>
      <script src="/ressources/vendor/datatables/dataTables.bootstrap4.js" ></script>
      <script src="/ressources/js/sb-admin.min.js" ></script>
      <script src="/ressources/js/sb-admin-datatables.min.js" ></script>
    </div>
  </body>
</html>
