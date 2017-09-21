<?php

class Database {
    private $db;

    public function __construct(){
        $this->$db = new PDO('mysql:dbname=smuzevic_ajax_chat;host=localhost', 'smuzevic', 'smuzevic');
        $this->$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    }
    public function sendMessages($text, $timestamp){
        try{
            $query = $this->$db->prepare('INSERT INTO message (text, timestamp) 
            VALUES (:text, :timestamp);');
$query->bindValue(':text', $text);
$query->bindValue(':timestamp', $timestamp);
$query->execute();

}catch(Exeption $exeption){
    echo $exeption->getMessage();
}
    }
public function getMessages(){
    try {
    $db = new PDO('mysql:dbname=ajax_chat;host=localhost', 'smuzevic', 'smuzevic');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$stmt = $db->prepare('SELECT * FROM message');
$stmt->execute();
$res = $stmt->fetchAll();

$query = json_encode($res);

echo $query;

}
    }