<?php
    $db = new PDO('mysql:dbname=ajax_chat;host=localhost', 
    'ajax_chat_user', 
    'We love SQL API!');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare('SELECT * FROM messages');
$stmt->execute();

$query = $stmt->fetchAll();

?>


