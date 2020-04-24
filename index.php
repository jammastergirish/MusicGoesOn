<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path'])
{
    case '/':
        require 'main.php';
        break;
    case '/article.php':
        require 'article.php';
        break;
    case '/banner.php':
        require 'banner.php';
        break;
    case '/file.php':
        require 'file.php';
        break;
    case '/redir.php':
        require 'redir.php';
        break;
    case '/robots.txt':
        require 'robots.txt';
        break;
    case '/search.php':
        require 'search.php';
        break;
    case '/site.php':
        require 'site.php';
        break;
    case '/stats.php':
        require 'stats.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>
