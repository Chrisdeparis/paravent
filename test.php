<?php 

// entrer les paramètres en une seule fois
$options = getopt("n:h:");

// recupérer la largeur du continent n
$n = $options['n'];

// recuperer les altitudes séparées par un espace 
$test = $options['h'];
$test = explode(' ', $test);


/**
 * retourne la surface d'abri disponible
 */
function sortie($tableau, $n){
    $count=0;   
    
    $premier = current($tableau);
    $max = max($tableau);
    
    for($i=1; $i<$n; $i++){
        if($premier > $tableau[$i] or $max > $tableau[$i]){
            $count++;
        }  
    }
    return $count; 
    
}



/**
 * Vérifie que la largeur du continent correspond aux altitutes
 */
function estValide($test, $n){
    $result = false;
    
    $nbElements = sizeof($test);

    if($nbElements == $n ) {
        $result = true;
    }
    return $result;
}
/**
 * Verifie que les contraintes sont respectées
 */
function contrainteOk($test, $n){
    $result = false;
    if($n > 0 and $n < 100001){
        $result = true;
    }
    
    foreach($test as $t){

        if($t > -1 and $t < 100001){
            $result = true;  
        } else {
            $result = false;
        }
    }
    return $result;
}

if(estValide($test, $n) and contrainteOk($test, $n)){
    echo sortie($test, $n);
} else {
    echo 'saisie incorrecte';
}

?>
