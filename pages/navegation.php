<?php
//var_dump($_GET);

$baseUrl = basename($_SERVER['PHP_SELF']);

// if (isset($baseUrl)) {
//     $url = explode('.', $baseUrl);
// }
// echo $url[0];
//var_dump($url);

if ($baseUrl == 'index.php' || $baseUrl == '') {
    require 'partials/home.php';
} elseif ($baseUrl == 'index') {
    require 'partials/football.php';
} elseif ($baseUrl == 'tennis') {
    require 'partials/tennis.php';
} elseif ($baseUrl == 'hockey') {
    require 'partials/hockey.php';
} elseif ($baseUrl == 'aboutus') {
    require 'partials/aboutus.php';
} else {
    require 'partials/404.php';
}
