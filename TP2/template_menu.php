<?php
    function renderMenuToHTML($currentPageId,$langue) {
        $mymenu = array(
        'accueil' => array('Accueil','Home'),
        'competences' => array('Compétences','skills'),
        'formations' => array('Formations','Education'),
        'experiences' => array('Expériences','Experience'),
        'activites' => array('Activités extrascolaires','Extracurricular activities')
        );
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
            if ($currentPageId == $pageId){
                if($currentLang == 'fr')
                    echo "id=\"currentpage\" href=\"index.php?page=$pageId&lang=$langue\">".$pageParameters[0].'</a></li>';
                else
                    echo "id=\"currentpage\" href=\"index.php?page=$pageId&lang=$langue\">".$pageParameters[1].'</a></li>';
            }
            else {
                if($currentLang == 'fr')
                    echo "href=\"index.php?page=$pageId&lang=$langue\">".$pageParameters[0].'</a></li>';
                else
                    echo "href=\"index.php?page=$pageId&lang=$langue\">".$pageParameters[1].'</a></li>';
            }
        }
        echo "</ul></nav>";
    }
?>