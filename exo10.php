<?php

$billets = array(10, 5, 2, 1);
$nbr = count($billets);
$rap = 48;

for($i = 0; $i < $nbr; $i++)
{

    $nbrBillets= intval($rap / $billets[$i]);
    $rap = $rap % $billets[$i];

     echo "{$nbrBillets} billets de {$billets[$i]}€ - "; 

}






























































