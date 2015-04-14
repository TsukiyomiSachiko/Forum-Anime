<?php

$rank = (isset($news['rank']))? $news['rank']: 'nill';

switch ($rank) {
    case 1:
         require 'news.user.php';
        break;

    case 2:
          require 'news.admin.php';
       break;

    case 3:
    	require 'news.admin.php';
    	break;

    default:
        echo 'Je bent geen user, dus je mag nepnep';
    }