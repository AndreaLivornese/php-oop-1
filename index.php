
<?php

@require_once "Movie.php";

$firstMovie= new Movie("Kung fu Panda 4", "Poo", 120, "Commedia, Animazione, Azione, Avventura","Mike Mitchell");

// var_dump($firstMovie);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Movie</h1>
    
    <div class="center">
        <div class="square">
            <?= $firstMovie->stampa() ?>
        </div>
    </div>
    
</body>
</html>