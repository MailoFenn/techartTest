<?php
include 'db.php';

class NewsItem {
    private $db;

    function __construct() {
        $this->$db = new DB;
    }

    function getNewsPage($page) {
        $data = $this->$db->getNewsInfo($page);
        foreach($data as $item) {
            echo('
            <div class="news_item">
               <div>
                    <time>'.date('d.m.Y',$item['idate']).'</time>
                    <div class="news_title">
                        <a href=view.php?id='.$item['id'].'>'.$item['title'].'</a>
                    </div>
                </div>
                <div class="descr">'.$item['announce'].'</div> 
            </div>');
        }
    }

    function getPageButtons($page) {
        $quantity = $this->$db->getNewsQuantity();
        $quantity = ceil($quantity/5);
        for ($i = 1; $i <= $quantity; $i++) {
            $class = ($i == $page) ? '"page_button selected"' : '"page_button"';
            echo('<a class='.$class.' href=index.php?page='.$i.'>'.$i.'</a>');
        }
    }

    function getNewsItem($id) {
        $data = $this->$db->getNews($id);
        foreach($data as $item) {
            echo('
            <h1 class="title news_item_title">'.$item['title'].'</h1>
            <div class="full_news"> '.$item['content'].' </div>
            <a href="index.php" class="bottom_title back_button">Все новости>>></a>
            ');  
        }
    }
}
