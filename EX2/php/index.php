<?php

//Q1
$carre = fn($nbr) => $nbr ** 2; 
echo $carre(12);

//Q2

echo"<br>";
$racineCarre =fn($nbr) => $nbr ** 0.5 ;
echo $racineCarre(4) ; 

//Q3

echo"<br>";

$somme = fn($a,$b) => $a + $b ;
echo $somme(3,20);

//Q4

function estPremier(int $nbr): bool {
    if ($nbr <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($nbr); $i++) {
        if ($nbr % $i === 0) {
            return false;
        }
    }

    return true;
}

// true s affiche par la valeur : 1 et false par 0 
// j ai pense de creer une fnction qui permet  d afficher  le resultat aprtir de  conditon
// qui verifie le resultat de la fonction estPremier 

function affichage(int $nbr){

    if (estPremier($nbr)) {
        echo "$nbr est premier : true ";
        echo"<br>";
    } else {
        echo " $nbr est premier : false ";
        echo"<br>";
    }
}
echo"<br>";
echo affichage(7);
echo affichage(9);



?>

