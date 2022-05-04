<?php
class DB {   
    private $connection;
    private $statement;

    function __construct() {
        $this->$connection = new PDO('mysql:host=localhost;dbname=news_db', 'root', 'root');
    }

    function getNewsInfo($page) {
        $offset = ($page - 1) * 5;
        $query = 'SELECT * FROM news ORDER BY idate DESC LIMIT '.$offset.', 5';
        return $this->$connection->query($query);
    }

    function getNewsQuantity() {
        $query = 'SELECT * FROM news;';
        $res = $this->$connection->query($query);
        return $res->rowCount();
    }
}
?>