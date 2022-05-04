<?php
include 'NewsItem.php';

$news_generator = new NewsItem();

$id = $_GET['id'];
$page = $_GET['page'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новость</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='content'>
        <?php $news_generator->getNewsItem($id, $page); ?>
    </div>
</body>
</html>