<?php
class Database {
    private $db;

    public function __construct(){
        $this->$db = new PDO('mysql:dbname=ajax_chat;host=localhost', 'ajax_chat_user', 'We love SQL API!');
        
    }
}