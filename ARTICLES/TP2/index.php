<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes articles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-center text-bold text-lg">Mes articles</h1>

    <div class="grid grid-cols-3 gap-8 mx-auto container items-center">
        <?php include 'articles.php';
        if (isset($_GET['article_id']) && is_numeric($_GET['article_id'])) {
            $article_id = intval($_GET['article_id']);

            if ($article_id >= 0 && $article_id < count($articles)) {
                $article = $articles[$article_id];
        ?>
                <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo $article['image']; ?>" alt="" />
                    </a>
                    <div class="p-5">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $article['titre']; ?></h2>
                        <p class="mb-3 font-normal text-gray-700"><?php echo $article['contenu']; ?></p>
                    </div>
                </div>
            <?php
            } else {
                echo "Article not found.";
            }
        } else {
            foreach ($articles as $article_id => $article) {
            ?>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="?article_id=<?php echo $article_id; ?> ">
                        <img class="rounded-t-lg" src="<?php echo $article['image']; ?>" alt="" />
                    </a>
                    <div class="p-5">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $article['titre']; ?></h2>
                        <p class="mb-3 font-normal text-gray-700"><?php echo substr($article['contenu'], 0, 200); ?>...</p>
                        <a href="?article_id=<?php echo $article_id; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Lire plus
                        </a>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>
</body>

</html>