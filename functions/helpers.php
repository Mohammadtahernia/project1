<?php



define('BASE_URL', 'https://localhost/php-project/project1');


function redirect($url)
{
    header('Location: '. trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}
 

function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}

function url($url)
{
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ ');
}


function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}





