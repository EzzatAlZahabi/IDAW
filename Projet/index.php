<?php
<<<<<<< HEAD
    require_once('frontend/template_header.php');
    //require_once('backend/security.php');
=======
  require_once('frontend/template_header.php');
  require_once('backend/security.php');
>>>>>>> bab966dec6f834a1075914354a401920440703bd
?>

<div class="container my-3">
  <!-- Menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=journal">Journal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=profil" id="menuProfil">Profil</a> 
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=aliments">Aliments</a>
          </li>
        </ul>
        <a href="backend/deconnexion.php"><button type="button" class="btn btn-outline-danger btn-sm" style="float: right;">Déconnexion</button></a>
      </div>
    </div>
  </nav>
  <!-- Page -->
  <div>
    <?php
      $currentPage = 'dashboard';
      if(isset($_GET['page'])) {
        $currentPage = $_GET['page'];
      } 
      $pageToInclude = "frontend/".$currentPage.".php";
      if(is_readable($pageToInclude)){
        require_once($pageToInclude);
      }
      else{
      echo "erreur";
        // require_once("error.php");
      }
    ?>
  </div>
</div>

<?php 
  require_once('frontend/template_footer.php');
?>