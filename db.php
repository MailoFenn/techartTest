<?php
class DB {   
    private $connection;

    function __construct() {
        $this->$connection = new PDO('mysql:host=localhost;dbname=news_db', 'root', 'root');
    }

    function getNewsInfo($page) {
        $offset = ($page - 1) * 5;
        $query = 'SELECT * FROM news ORDER BY idate LIMIT '.$offset.', 5';
        return $this->$connection->query($query);
    }
}
?>