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
            $id = $_POST['id'];
            
            $sql = "DELETE FROM Utilisateur WHERE `Utilisateur`.`ID` = $id";
            $conn->exec($sql);
        }
    }

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    
?>

<body>
</body>
</html>