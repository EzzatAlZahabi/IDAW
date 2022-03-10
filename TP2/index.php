<?php
    require_once("template_header.php");
    require_once("template_menu.php");

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 
    renderMenuToHTML($currentPageId);

    $langue = 'fr';
    if(isset($_GET['lang'])) {
        $langue = $_GET['lang'];
    } 

?>

<section class="corps">
    <?php
        $pageToInclude = $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
    ?>
</section>
</body>
</html>