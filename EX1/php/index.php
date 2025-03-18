<?php
//Q1
$tab=[];
for ( $i= 0 ; $i<5 ; $i++ ){
    $tab[]=rand(1,100);
}
print_r($tab);
echo"<br>";
//Q2
foreach ($tab as $nbr)
{
    echo " $nbr \n";
}

//Q3

function trier($tab) {
    sort($tab); 
}
echo"<br>"; 
trier($tab);
echo"<br>"; 

//Q4
function somme($tab){
    $sum=0;
    foreach ($tab as $nbr)
        {
            $sum +=$nbr;
        }
    echo"la somme de tableau $sum\n";
}
somme($tab);

echo"<br>"; 

//Q5

function maximum($tab) {
    $max = $tab[0]; 
    for ($i = 0; $i < sizeof($tab) - 1; $i++) { 
        if ($tab[$i] < $tab[$i + 1]) {
            $temp = $tab[$i + 1];
            $tab[$i + 1] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
    
    print_r($tab); 
}


?>