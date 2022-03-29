<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'idaw';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }

    $utilisateur = array("ID_UTILISATEUR", "NOM", "PRENOM", "LOGIN", "PASSWORD", "TRANCHE_AGE", "SEXE", "BESOIN_ENERGITIQUE");
    $query = "SELECT * FROM UTILISATEUR";
    $resultat = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultat)>0){
		while($row = mysqli_fetch_array($resultat)){
            foreach($utilisateur as $var) {
                echo $var." : ".$row[$var]."<br>";
            }
		}
	}
?>