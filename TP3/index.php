<?php
    if(isset($_GET['css'])) {
        setcookie("style",$_GET['css']);
    }
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' ,
        'Ezzat99' => 'Zahabi99'
    );
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            session_start();
            $_SESSION['login'] = $tryLogin;
            $_SESSION['password'] = $tryPwd;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";

    if(!$successfullyLogged) {
    echo $errorText;
    } else {
        // require_once("accueil.php");
    }
?>

<form id="style_form" action="" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<form id="login_form" action="accueil.php" method="POST">
    <table> 
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
        </tr>
    </table>
</form>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP3</title>
        <?php
            $style_def = 'style1';
            if(isset($_COOKIE['style'])){
                $style_def = $_COOKIE['style'];
            }
            echo "<link rel=\"stylesheet\" href=\"$style_def.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />";
        ?>
    </head>