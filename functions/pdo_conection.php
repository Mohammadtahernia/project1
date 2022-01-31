<?php


try {
    
    $pdo = new PDO ("mysql:host=localhost;dbname=php_project",'root','');
    echo 'hi';
}

catch(PDOException $e){
    echo 'error' . $e->getMessage();
    exit;
}



