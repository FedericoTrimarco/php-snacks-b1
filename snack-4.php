<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $arr = [];

    for ($i = 0; $i < 15; $i++) {
        $randomNumber = 0;

        if(!in_array($randomNumber, $arr)){
            $randomNumber = rand(1, 100);
            $arr[] = $randomNumber;
        }
    }
    var_dump($arr);
?>