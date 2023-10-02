<?php
include('articles.php')
?>
<!DOCTYPE html>

<html>

<head>
    <title>Articles</title>
</head>

<body>
    <h1>List of Articles</h1>
    <?php
    foreach ($articles as $article) :
    ?>
        <div class="article">
            <h2><?php echo $article['titre']; ?></h2>
            <p><strong>Auteur:</strong> <?php echo $article['auteur']; ?></p>
            <p><strong>Date:</strong> <?php echo $article['date']; ?></p>
            <img src="<?php echo $article['image']; ?>" alt="Article Image" width="300">
            <p><?php echo $article['contenu']; ?></p>
        </div>
    <?php endforeach; ?>

</body>

</html>