<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css">
    <title></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li class="<?php echo ($page == "accueil" ? "active" : "") ?>"><a href="index.php">Accueil</a></li>
            <li class="<?php echo ($page == "article" ? "active" : "") ?>"><a href="article.php">Article</a></li>
        </ul>
    </nav>
</header>
</body>
</html>
