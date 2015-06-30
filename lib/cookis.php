<?php
// si langue déclarée par cookie et qu'il ny a pas de requete
// pour le choix de la langue alors on choisit le cookie
if (isset ($_COOKIE['CHOIXlang']) && $_GET['langue'] != 'fr' && $_GET['langue'] != 'en')
{
    $langue = $_COOKIE['CHOIXlang'];
}
// le choix de la langue est déclaré par url
else if ($_GET['langue'] == 'en' || $_GET['langue'] == 'fr')
{
    $langue = $_GET['langue'];
    set_cookie($langue);
}
// si aucune langue n'est déclarée on tente de reconnaitre
// la langue par défaut du navigateur
else
{
    $langue = 'fr';
    set_cookie($langue);
}


function set_cookie($langue)
{
//définition de la durée du cookie (1 an)
    $expire = 365*24*3600;
//enregistrement du cookie au nom de CHOIXlang + détection si erreur
    if (setcookie("CHOIXlang", $langue, time() + $expire) != TRUE)
    {
//     	        echo 'Le cookie na pas marché<br />';
    }
    else
    {
        setcookie("CHOIXlang", $langue, time() + $expire);
//		echo 'Le cookie a marché<br />';
    }
}

?>