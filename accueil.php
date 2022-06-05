<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/accueil.css">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <main>
        <section>
<?php
require 'bdd.php';
$page = 'article';
foreach ($articles as $key => $article) {
    echo '<div>';
    echo '<a href="article.php">';
    echo '<img src="' . $articles[$key]['image'] . '"alt="">';
    echo '<h3>' . $articles[$key]['titre'] . '</h3>';
    echo '<h4>' . $articles[$key]['description'] . '</h4>';
    echo '</a>';
    echo '</div>';
}
?>
        </section>
        <aside>
            <div> <img class="image-aside" src="image/bird2.jpg" alt=""></div>
            <div class="text-aside">
                <ul>
                    <li>Article 1</li>
                    <li>Article 2</li>
                    <li>Article 3</li>
                    <li>Article 4</li>
                    <li>Article 5</li>
                    <li>Article 6</li>
                </ul>
            </div>
            <div class="contact">
                <p>12 rue de l'envolée</p>
                <p>69000 Colombe</p>
            </div>
        </aside>
    </main>

</body>

</html>

<?php
