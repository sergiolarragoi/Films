<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Films</title>
    </head>
    <body>
        <h2>Select the film</h2>
        <form name="formContinent" action="../controllers/cFilmDetails.php" method="GET">
            <select name ='cmbFilms'>    
                <?php foreach ($listFilms as $film) { ?>
                    <option value="<?php echo $film->getIdPelicula(); ?>"><?php echo $film->getTituloPelicula(); ?></option>
                <?php } ?>

            </select>
            <input type="submit" value="Show card" name="btnShowCard" />
        </form> 
    </body>
</html>
