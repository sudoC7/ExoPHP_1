<?php

$mot = " Engage le jeu que je le gagne";
$mot = str_replace(' ', '', $mot);
$mot = strtolower($mot);
echo $mot;
$reverse = strrev($mot);

if($mot == $reverse)
{
    echo"<br>This is a Palindrome";
}
else 
{
    echo"<br>This is not a palindrome";
}

