<?php
// Calculer la moyenne generale d'un eleve
// Notes 10 12 8 19 3 16 11 13 9
// Moyennne 11.22

$notes = array(12, 10, 8, 19, 3, 16, 11, 13, 9);
$i = 0;
$moyenne = 0;

foreach($notes as $nbr)
{
    $i++;
    $moyenne += $nbr;
}

echo "La moyenne de l'eleve est : ". round($moyenne=$moyenne/$i, 2);