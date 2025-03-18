<?php

class Personne {
    private $name;
    private$age;
    private $city;
    //constructeur ::
    function __construct($name, $age, $city) {
        $this->name=$name;
        $this->age=$age;
        $this->city=$city;
    }
    
    function sePresenter() {
        echo "<h3>Je suis $this->name, j'ai $this->age ans, j'habite à $this->city.</h3> <br>";
    }
}
//$p1=new Personne("Youssef","21","FES");
//$p2=new Personne("Berrissoul","21","FES");
//$p3=new Personne("Mounir","31","casa");
//$p4=new Personne("Salma","33","agadir");
//$p1->sePresenter();
//$p2->sePresenter();
//$p3->sePresenter();
//$p4->sePresenter();

$tab = [
    new Personne("Youssef", "21", "FES"),
    new Personne("Berrissoul", "21", "FES"),
    new Personne("Mounir", "31", "casa"),
    new Personne("Salma", "33", "agadir")
];
// pour avvec tous les donnes de la perssonne 
//avec boucle for :
for($i=0 ; $i<sizeof($tab) ; $i++ ){
    $tab[$i]->sePresenter();
}
//avec foreach  :
foreach ($tab as $pr) {
    $pr->sePresenter();
}


// Q4 pour afficher seulement le nom et age 

echo"<ul>";
foreach ($tab as $pr) {
    echo"<li> Name : $pr->name  , Age : $pr->age ans . ";
}

?>