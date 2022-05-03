<?php
$connection = new PDO('mysql:host=localhost;dbname=news_db', 'root', 'root');
class DB {    
    function getNewsId($page) {
        global $connection;
        $offset = ($page - 1) * 5;
        return $connection->query('SELECT * FROM news LIMIT '.$offset.', 5');
    }
}
?>