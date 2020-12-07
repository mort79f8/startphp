<?php

// funder via grepper.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];

echo $url;

$favfruit = 'jackfruit';

switch ($favfruit) {
    case 'apple':
        echo nl2br("\nApples are great");
        break;
    case 'banana':
        echo nl2br("\nI also like bananas");
        break;
    case 'jackfruit':
        echo nl2br("\n Thats just weird");
        break;
    default:
        echo nl2br("\nOk...whatever...");
}
