<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $paragraphs = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, officia officiis eos architecto sit, non, unde ab nulla magnam fugiat reprehenderit asperiores ratione provident qui illo saepe laboriosam porro natus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, officia officiis eos architecto sit, non, unde ab nulla magnam fugiat reprehenderit asperiores ratione provident qui illo saepe laboriosam porro natus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, officia officiis eos architecto sit, non, unde ab nulla magnam fugiat reprehenderit asperiores ratione provident qui illo saepe laboriosam porro natus.';

    echo '<h1>PARAGRAFO-1</h1>'.$paragraphs .'<br><br>';

    $mewParagraphs = str_replace('.', '<br>', $paragraphs);
    echo '<h1>PARAGRAFO-2</h1><br>'.$mewParagraphs;
?>