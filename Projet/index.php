<?php
    require_once('frontend/template_header.php');
    require_once('backend/security.php');
    echo $_SESSION['login']."<br>";
    echo $_SESSION['password']."<br>";
    echo $_SESSION['id']."<br>";
?>


<a href="backend/deconnexion.php"><button>Déconnexion</button></a>

<?php require_once('frontend/template_footer.php'); ?>