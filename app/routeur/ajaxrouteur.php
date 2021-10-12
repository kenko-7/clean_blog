<?php 

switch ($_GET['ajax']): 

    case 'updateField': 
        include '../app/controllers/postController.php';
        App\Controllers\PostController\AjaxUpdateFieldAction($conn, $_GET['id'], $_GET['field'], $_GET['value']);
        break; 

    case 'older-posts': 
        include '../app/controllers/postController.php';
        App\Controllers\PostController\AjaxOlderAction($conn , $_GET['offset']);
        break;
endswitch;