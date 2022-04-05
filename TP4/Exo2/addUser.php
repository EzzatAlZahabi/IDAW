<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Add User</title>
</head>

<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'TP4';

    //essaye de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Sélectionne toutes les valeurs dans la table user
        if(isset($_POST['nom'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date = $_POST['date'];
            $aime = $_POST['aime'];
            $remarque = $_POST['remarque'];
            
            $sql = "INSERT INTO `Utilisateur` (`ID`, `NOM`, `PRENOM`, `DATE`, `AIME`, `REMARQUE`) VALUES (NULL, '$nom', '$prenom', '$date', '$aime', '$remarque')";
            $conn->exec($sql);
            echo 'Entrée ajoutée dans la table';
        }
    }

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    
?>

<body>
</body>
</html>