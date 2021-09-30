<?php 

// ROUTES AJAX ------------------------------------------------------------

if (isset($_GET['ajax']) and $_GET['ajax'] === 'older-posts' ): 

    include '../app/controllers/postController.php';
    App\Controllers\PostController\AjaxOlderAction($conn , $_GET['offset']);

// ROUTES STANDARDS -------------------------------------------------------

elseif (isset($_GET['postId'])): 

    include '../app/controllers/postController.php';
    App\Controllers\PostController\showAction($conn, $_GET['postId']);

elseif (isset($_GET['pageId'])): 

    include '../app/controllers/pageController.php';
    App\Controllers\PageController\showAction($conn, $_GET['pageId']);

else :
    include '../app/controllers/pageController.php';
    App\Controllers\PageController\showAction($conn, 1);


endif;