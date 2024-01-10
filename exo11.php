<?php

// Initialiser un tableau de X marques de voitures. Ecrire un algorithmes permettant de parcourir ce tableau et d'en afficher le contenu ( une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.


$marquesV= array("Peugeot", "Renault","BMW", "Mercedes");
$nbr = count($marquesV);

echo"Il y'a {$nbr} marques de voitures dans le tableau : <br>";

foreach($marquesV as $nom)
{
    echo "{$nom} <br>";
}