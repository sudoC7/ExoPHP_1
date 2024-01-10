<?php
//Si la personne est un femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas " non imposable")


$homme = 19;
$femme = 32;

if($femme >18 && $femme < 35 || $homme > 20)
{
    if($femme >18 && $femme < 35)
    {
        echo "Age  : {$femme}<br>";
        echo "Sexe : F<br>La personne est impossable<br>";
    }
    else
    {
        echo "Age  : {$homme}<br>";
        echo "Sexe : H<br>La personne est impossable<br>";
    }

}
else
{
    echo "Non imposable<br>";
}