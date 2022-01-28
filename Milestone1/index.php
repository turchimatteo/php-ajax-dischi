<?php
    $data = require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Spotify</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo-small.svg" alt="">
        </div>
    </header>

    <div class="cards">
        <?php foreach($database as $element) { ?>
            <div class="card">
                <img src="<?php echo $element['poster']?>" alt="">
                <h2> <?php echo $element['title'] ?> </h2>
                <h4><?php echo $element['author'] ?></h4>
                <h4><?php echo $element['year'] ?></h4>
            </div>
        <?php } ?>   
    </div>     
</body>
</html>