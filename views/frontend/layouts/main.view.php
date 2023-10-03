<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Ein eigenes CMS</h1>
        <p>Hier finden Sie eine schöne Wetter-App</p>
        <?php foreach( $navigation AS $navigationElenemt): ?>
            <a href="index.php?page=<?php echo e($navigationElenemt->slug); ?>"><?php echo e($navigationElenemt->title); ?></a>
        <?php endforeach ?>

    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>Projekt: CMS vom PHP-Kurs</p>
    </footer>
</body>
</html>