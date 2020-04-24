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
    case '/news':
        require 'news/index.php';
        break;
    case '/news/':
        require 'news/index.php';
        break;
    case '/news/archive.php':
        require 'news/archive.php';
        break;
    case '/reviews/albums':
        require 'reviews/albums/index.php';
        break;
    case '/reviews/albums/':
        require 'reviews/albums/index.php';
        break;
    case '/reviews/singles':
        require 'reviews/singles/index.php';
        break;
    case '/reviews/singles/':
        require 'reviews/singles/index.php';
        break;
    case '/artists':
        require 'artists/index.php';
        break;
    case '/artists/':
        require 'artists/index.php';
        break;
    case '/artists/artist.php':
        require 'artists/artist.php';
        break;
    case '/artists/au_vi.php':
        require 'artists/au_vi.php';
        break;
    case '/artists/az.php':
        require 'artists/az.php';
        break;
    case '/artists/interviews.php':
        require 'artists/interviews.php';
        break;
    case '/artists/live.php':
        require 'artists/live.php';
        break;
    case '/artists/news.php':
        require 'artists/news.php';
        break;
    case '/artists/reviews.php':
        require 'artists/reviews.php';
        break;
    case '/competitions':
        require 'competitions/index.php';
        break;
    case '/competitions/':
        require 'competitions/index.php';
        break;
    case '/contactus':
        require 'contactus/index.php';
        break;
    case '/contactus/':
        require 'contactus/index.php';
        break;
    case '/forums':
        require 'forums/index.php';
        break;
    case '/forums/':
        require 'forums/index.php';
        break;
    case '/forums/add_edit.php':
        require 'forums/add_edit.php';
        break;
    case '/forums/edit.php':
        require 'forums/edit.php';
        break;
    case '/forums/forum.php':
        require 'forums/forum.php';
        break;
    case '/forums/login.php':
        require 'forums/login.php';
        break;
    case '/forums/profile.php':
        require 'forums/profile.php';
        break;
    case '/forums/register.php':
        require 'forums/register.php';
        break;
    case '/forums/topic.php':
        require 'forums/topic.php';
        break;
    case '/interviews':
        require 'interview/index.php';
        break;
    case '/interviews/':
        require 'interview/index.php';
        break;    
    case '/live':
        require 'live/index.php';
	  break;
    case '/live/':
        require 'live/index.php';
        break;    
    case '/live/search.php':
        require 'live/search.php';
        break;    
    default:
        http_response_code(404);
        exit('Not Found');
}

?>
