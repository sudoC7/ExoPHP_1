<?php

// Calculer l'age exacte d'une personne a partir de sa date de naissance(an, mois, jours).

$dateC = new DateTime("2018-05-21");
$dateN = new DateTime("1985-01-17");

$interval = $dateC->diff($dateN);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";