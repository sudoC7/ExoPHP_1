<?php

//A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associé (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français -> Salut ...)

$langue = array("Marie-Claire"=>"ENG", "Mickael"=>"FRA", "Virgile"=>"ESP");
$nbr = count($langue);

foreach ($langue as $nom => $lang) //La fonction "foreach" permet de parcourir le tableau && 
{
    switch($lang)
    {
        case "ENG";
            echo "Hello ".$nom."<br>";
            break;
        case "FRA";
            echo "Salut ".$nom."<br>";
            break;
        case "ESP";
            echo "Hola ".$nom."<br>";
            break;
    }
}

