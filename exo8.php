<?php
// Affichage pour la table 8
//Solution 1
$nombre = 10;
$huit = 8;

for($i = 1; $i <= 10; $i++)
{
  echo "{$i} x {$huit} =". $i * $huit."<br>";
}
//////////////////////////////////////////////////////////
//Solution 2
$i = 1;
while($i <= 10)
{
    
    echo "{$i} x {$huit} =". $i * $huit."<br>";
    $i++;
}