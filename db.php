<?php
class DB {   
    private $connection;

    function __construct() {
        $this->$connection = new PDO('mysql:host=localhost;dbname=news_db', 'root', 'root');
    }

    function getNewsInfo($page) {
        $offset = ($page - 1) * 5;
        return $this->$connection->query('SELECT * FROM news LIMIT '.$offset.', 5');
    }
}
?>