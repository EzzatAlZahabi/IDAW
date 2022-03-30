<?php
    session_start();
    $servername = 'localhost';
    $username = 'root';
    $mdp = 'root';
    $dbname = 'idaw';
    $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "AGE", "SEXE", "BESOIN_ENERGITIQUE");

    $conn = mysqli_connect($servername, $username, $mdp, $dbname);
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }