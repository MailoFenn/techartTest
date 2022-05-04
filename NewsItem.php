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
                    <div class="title">
                        <a href=#>'.$item['title'].'</a>
                    </div>
                </div>
                <div class="descr">'.$item['announce'].'</div> 
            </div>');
        }
        
    }
}
