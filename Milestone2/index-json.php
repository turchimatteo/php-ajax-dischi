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

    <div id="root">
        <div class="cards">
            <div class="card" v-for="element in array">
                <img :src="element.poster" alt="element.title">
                <h2>{{ element.title }}</h2>
                <h4>{{ element.author }}</h4>
                <h4>{{ element.year }}</h4>
            </div> 
        </div> 
    </div>
    <script src="js/script.js"></script>    
</body>
</html>