<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Directors</title>
    </head>
    <body>
        <h2>Directors</h2>
        <?php
        foreach ($listDirectors as $director) {
            echo $director->getNombreDirector() . '<br/>';
        }
        ?>
    </body>
</html>
