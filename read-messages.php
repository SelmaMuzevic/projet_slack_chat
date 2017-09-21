<?php
header("content-Type: text/plain");

try {
    $db = new PDO('mysql:dbname=ajax_chat;host=localhost', 'ajax_chat_user', 'We love SQL API!');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$stmt = $db->prepare('SELECT * FROM message');
$stmt->execute();
$res = $stmt->fetchAll();

$query = json_encode($res);

echo $query;

?>
