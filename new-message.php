<?php
if(!empty($_POST['message'])){
    http_response_code(400);
    header("Content-type: text/plain");
    echo "missing parameter";
    exit(1);
}
echo $_POST['message'];
?>