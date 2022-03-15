<?php
    if(isset($_GET['css'])) {
        setcookie("style",$_GET['css']);
    }
?>

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
    <body>
        <form id="style_form" action="index.php" method="GET">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>
    </body>
</html>