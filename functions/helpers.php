<?php


 
define('BASE_URL', 'https://localhost/php-project/');


function redirect($url)
{
    header('Location: '. trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}
 

function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}



function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}

