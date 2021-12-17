<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $arr = [];

    for ($i = 0; $i < 15; $i++) {
        $randomNumber = rand(1, 15);

        if(!in_array($randomNumber, $arr)){
            $arr[] = $randomNumber;
        } else{
            $i--;
        }
    }
    var_dump($arr);
?>