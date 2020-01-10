<?php
// definit une fonction appelée `sum` qui
// recevra une liste de nombres comme argument
function sum($numbers) {
    // initialiser la variable qu'on renverra
    $sum = 0;

    // additionner les nombres
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // renvoyer la somme à l'utilisateur
    return $sum;
}

// Exemple d'utilisation de sum
echo sum([1,2,3,4,5,6,7,8,9,10]);


?>