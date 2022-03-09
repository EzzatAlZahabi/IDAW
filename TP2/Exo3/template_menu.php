<?php
    function renderMenuToHTML($currentPageId) {
    $mymenu = array(
    'accueil' => array( 'Accueil' ),
    'competences' => array( 'Compétences' ),
    'formations' => array( 'Formations' ),
    'experiences' => array('Expériences')
    'activites' => array( 'Activités extrascolaires' ),
    );
    echo "<nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<li><a ";
        if ($currentPageId == $pageId)
            echo "id=\"currentpage\" ";
        echo "href=\"$pageId.php\">$pageParameters[0]</a></li>\n";
    }
    echo "</ul></nav>";
    }
?>