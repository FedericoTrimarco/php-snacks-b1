<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $numbers = [];

    while(count($numbers) < 15){
        $randomNumber = rand(1, 15);

        if(!in_array($randomNumber, $numbers)){
            $numbers[] = $randomNumber;
        }
    }
    var_dump($numbers);
?>