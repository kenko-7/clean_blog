<?php 

if (isset($_GET['postId'])): 

    include '../app/controllers/postController.php';
    App\Controllers\PostController\showAction($conn, $_GET['postId']);

elseif (isset($_GET['pageId'])): 

    include '../app/controllers/pageController.php';
    App\Controllers\PageController\showAction($conn, $_GET['pageId']);

else :
    include '../app/controllers/pageController.php';
    App\Controllers\PageController\showAction($conn, 1);


endif;