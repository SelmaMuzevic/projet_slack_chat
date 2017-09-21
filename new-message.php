<?php
if (empty($_POST['message'])) {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
    
}

try {
    $db = new PDO('mysql:dbname=smuzevic_ajax_chat;host=localhost', 'smuzevic', 'smuzevic');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// preparation de la requete et insertion des donnees dans la database avec la value text et timestamp
$stmt = $db->prepare('INSERT INTO message (text, timestamp) VALUES (:text, :timestamp);');
$stmt->execute([
    ':text' => $_POST['message'],
    ':timestamp' => date("Y-m-d H:i:s")// ça defini par défaut l'heure courante locale (Y: year, m: month, d: date, H: hour, i: minuts, s: seconds)
]);

echo $_POST['message'];