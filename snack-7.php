<!-- Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
    $alunni = [
        [
            'name' => 'Federico',
            'lastname' => 'Trimarco',
            'vote' => [
                'math' => rand(1, 10),
                'coding' => 10,
                'english' => rand(1, 10),
            ],
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'vote' => [
                'math' => rand(1, 10),
                'coding' => 10,
                'english' => rand(1, 10),
            ],
        ],
        [
            'name' => 'Lello',
            'lastname' => 'Salvati',
            'vote' => [
                'math' => rand(1, 10),
                'coding' => 10,
                'english' => rand(1, 10),
            ],
        ]
       
    ];

    for($i = 0; count($alunni[$i]); $i++){
        echo 'Nome Alunno: '.$alunni[$i]['name']. $alunni[$i]['lastname'].'<br>';
        $somma = 0;
        $votes = array_keys($alunni[$i]['vote']);
        
        for ($j = 0; $j < count($votes); $j++) {
            $somma += $alunni[$i]['vote'][$votes[$j]];
            echo $votes[$j].': '.$alunni[$i]['vote'][$votes[$j]] .'<br>';
        } 
        
        $media = round($somma / count($votes), 2);
        echo 'Media: '.$media. '<br><br>';
    }
?>