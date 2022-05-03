<?php
include 'db.php';
$db = new DB;
class NewsItem {
    function getNewsPage($page) {
        global $db;
        $data = $db->getNewsId($page);
        foreach($data as $item) {
            echo('
            <div class="news_item">
               <div>
                    <time>13.02.2012</time>
                    <div class="title">
                        <a href=#>'.$item['title'].'</a>
                    </div>
                </div>
                <div class="descr">'.$item['announce'].'</div> 
            </div>');
        }
        
    }
}
