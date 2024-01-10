<?php

// Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA(Exprimé en décimal. Ex : 20% -> 0.2)

$article1 = 9.99;
$quantite = 5;
$tva = 0.2;

$prixTotalArticles = ($quantite * $article1 * (1+$tva));

echo "Prix unitaire de l'article : $article1 <br>";
echo "Quantite : $quantite<br>";
echo "Taux de TVA : $tva<br>";
echo "Montant de la facture: $prixTotalArticles<br>";




// On 5 articles
// prix d'1 article  9.99
// Taux de TVA : 20% -> 0.2
// Montant de la facture 59.94