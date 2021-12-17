<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $postsKeys = array_keys($db);
    var_dump($postsKeys);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>
    <div style="display:flex;">
        <div id="teachers" style="background:gray; width:200px; text-align:center; margin-right:20px">
            <h3>
                <?php echo $postsKeys[0]; ?>
            </h3>
            <p>
                <?php
                    for($i = 0; $i < count($db[$postsKeys[0]]); $i++){
                        echo $db[$postsKeys[0]][$i]['name'].' '.$db[$postsKeys[0]][$i]['lastname'].'<br>';
                    }
                ?>
            </p>
        </div>
    
        <div id="pm" style="background:green; width:200px; text-align:center;">
            <h3>
                <?php echo $postsKeys[1]; ?>
            </h3>
            <p>
                <?php
                    for($i = 0; $i < count($db[$postsKeys[1]]); $i++){
                        echo $db[$postsKeys[1]][$i]['name'].' '.$db[$postsKeys[1]][$i]['lastname'].'<br>';
                    }
                ?>
            </p>
        </div>

    </div>
</body>
</html>