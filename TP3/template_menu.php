<?php
    function renderMenuToHTML($currentPageId,$langue) {
        $mymenu = array(
        'accueil' => array('Accueil','Home'),
        'competences' => array('Compétences','Skills'),
        'formations' => array('Formations','Education'),
        'experiences' => array('Expériences','Experience'),
        'activites' => array('Activités extrascolaires','Extracurricular activities')
        );
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
            if ($currentPageId == $pageId){
                if($langue == 'fr')
                    echo "id=\"currentpage\" href=\"accueil.php?page=$pageId&lang=$langue\">".$pageParameters[0]."</a></li>";
                else
                    echo "id=\"currentpage\" href=\"accueil.php?page=$pageId&lang=$langue\">".$pageParameters[1]."</a></li>";
            }
            else {
                if($langue == 'fr')
                    echo "href=\"accueil.php?page=$pageId&lang=$langue\">".$pageParameters[0]."</a></li>";
                else
                    echo "href=\"accueil.php?page=$pageId&lang=$langue\">".$pageParameters[1]."</a></li>";
            }
        }
        echo "</ul></nav>";
    }

    function changerLangue($currentPageId,$langue) {
        echo "<div class=\"langue\">";
        if($langue == 'fr')
            echo "<a href=\"accueil.php?page=$currentPageId&lang=en\">English</a>";
        else
            echo "<a href=\"accueil.php?page=$currentPageId&lang=fr\">Français</a>";
        echo "</div>";
    }
?>