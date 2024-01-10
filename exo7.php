<?php
// Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son age

$ageEnfant = 10;

if ($ageEnfant >= 12) 
{
    echo "L'enfant qui $ageEnfant ans appartient a la catégorie < Cadet >";
}
elseif($ageEnfant == 10 || $ageEnfant == 11)
{
    echo "L'enfant qui $ageEnfant ans appartient a la catégorie < Minime >";
}
elseif($ageEnfant == 8 || $ageEnfant == 9)
{
    echo "L'enfant qui $ageEnfant ans appartient a la catégorie < Pupille >";
}
elseif($ageEnfant == 6 || $ageEnfant == 7)
{
    echo "L'enfant qui $ageEnfant ans appartient a la catégorie < Poussin >";
}