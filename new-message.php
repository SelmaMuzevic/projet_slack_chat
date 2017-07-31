<?php
if (empty($_POST['message'])) {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}

$msg = new Message($_POST['message']);
// DEBUG: remove when connected to DB.
header('Content-Type: text/plain');
var_dump($msg);
