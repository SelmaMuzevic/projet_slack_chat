<?php
header("content-Type: text/plain");


try {
    $db = new PDO('mysql:dbname=smuzevic_ajax_chat;host=localhost', 'smuzevic', 'smuzevic');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$stmt = $db->prepare('SELECT * FROM message');
$stmt->execute();
$res = $stmt->fetchAll();

$query = json_encode($res);

echo $query;

?>
