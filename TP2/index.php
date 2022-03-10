<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 
    $langue = 'fr';
    if(isset($_GET['lang'])) {
        $langue = $_GET['lang'];
    }
    renderMenuToHTML($currentPageId,$langue);
    
    if($langue == 'fr')
        echo "<nav class=\"langue\"><a href=\"index.php?page=$currentPageId&lang='en'\">Anglais</a>"
    else
        echo "<nav class=\"langue\"><a href=\"index.php?page=$currentPageId&lang='fr'\">Français</a>"
?>

<section class="corps">
    <?php
        $pageToInclude =  $langue."/".$currentPageId.".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
    ?>
</section>
</body>
</html>