<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->

<?php

// creo un array vuoto
$list_numb = [];

// ciclo finchè l'array list_numb non conterrà 15 numeri
while(count($list_numb) < 15) {
    //creo dei numeri random in un intervallo da 1 a 100
    $rand_numb = rand(1, 100);

    // se il numero random NON è presente già nell'array list_numb..
    if(!in_array($rand_numb, $list_numb)) {
        // ..lo inserisco in quello stesso array
        $list_numb[] = $rand_numb;
    }
}

var_dump($list_numb);

?>