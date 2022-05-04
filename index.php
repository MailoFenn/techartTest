<?php
include 'NewsItem.php';

$news_generator = new NewsItem();

$page = $_GET['page'];

if (!$page) {
    $page = 1;
}
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
        <h1 class='title'>Новости</h1>
        <div class="news_list">
          <?php $news_generator->getNewsPage($page) ?>  
        </div>
        <div>
            <h3 class='bottom_title'>Страницы:</h3>
            <div class='page_button_container'>
                <?php $news_generator->getPageButtons($page); ?>
            </div>
        </div>
    </div>
</body>
</html>