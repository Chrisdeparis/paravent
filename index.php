<?php

// La première ligne est un entier n, la largeur du continent.
//La ligne suivante contient n entiers h , ..., h séparés par des espaces donnant les altitudes du terrain, d'ouest en est.
//Le vent arrive de la gauche (de l'ouest) et lorsqu'il rencontre une montagne, toutes les terres qui sont plus à droite et de hauteurs inférieures à celle-ci
//sont à l'abri.
//Chaque altitude correspond à un terrain d'une unité de surface.

// La sortie est un unique entier qui est la surface d'abri disponible.
//$n = 10;
//$tableau = [30, 27, 17, 42, 29, 12, 14, 41, 42, 42];
//$count=0;
//on prend la premiere valeur du tableau comme max
//$max = current($tableau);
// on compare la premiere valeur par rapport a la suivante et ainsi de suite
// if ($max > next($tableau)){
//     $count= $count+1;
// sinon current valeur du tableau est la nouvelle max.


// Exemple d'entrée
// 10
// 30 27 17 42 29 12 14 41 42 42
// Exemple de sortie
// 6

$tableau = [30, 27, 17, 42, 29, 12, 14, 41, 42, 42];

function sortie($tableau){
    $count=0;
    $n= 10;
    
    $max = current($tableau);

    for($i=0; $i<$n; $i++){
        if($max > next($tableau)){
            $count++;
        } else {
            current($tableau) == $max;           
        }
    }
    return $count;    
}
print("La sortie = ".sortie($tableau));





