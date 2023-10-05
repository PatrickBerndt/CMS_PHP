<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>CMS/Admin</title>
</head>
<body>
    <header>
        <h1>Admin bereich</h1>
        <p>Hier sollte der Admin bereich abgebildet werden</p>
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