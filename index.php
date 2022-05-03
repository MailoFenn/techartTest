<?php
include 'NewsItem.php';

$news_generator = new NewsItem();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='content'>
        <h1 class='page_title'>Новости</h1>
        <?php $news_generator->getNewsPage(1) ?>
    </div>
</body>
</html>