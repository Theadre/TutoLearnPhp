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


?>