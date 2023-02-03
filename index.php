<?php
include_once __DIR__ . "/db/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1> Movies</h1>
        <?php
        foreach ($movies as $movie) {
        ?> <ul>
                <li>
                    <?php echo $movie->getTitle() ?>
                </li>
                <li>
                    <?php echo $movie->getReleaseYear() ?>
                </li>
                <li>
                    <?php echo $movie->getDirector() ?>
                </li>
                <li>
                    <?php echo $movie->getCast() ?>
                </li>
                <li>
                    <?php echo $movie->getDuration() ?>
                </li>
                <li>
                    <?php echo $movie->getGender() ?>
                </li>
            </ul>
        <?php } ?>
    </main>
</body>

</html>