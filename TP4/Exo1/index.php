<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
</head>
<body>
    <?php
        require_once('fonctionsSQL.php');
        $user = readUser('19');
        echo $user["PRENOM"];
    ?>
</body>
</html>