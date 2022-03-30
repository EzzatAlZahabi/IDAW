<?php
    session_start();
    if(!$_SESSION['password']){
        header('Location: connexion.php');
    }
    echo $_SESSION['login']."<br>";
    echo $_SESSION['password']."<br>";
    echo $_SESSION['id']."<br>";
?>


<a href="deconnexion.php"><button>Déconnexion</button></a>