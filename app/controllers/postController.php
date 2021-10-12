<?php 

namespace App\Controllers\PostController;
use \App\Models\PostModel;


function indexAction(\PDO $conn) {
    include_once '../app/models/postModel.php';
    $posts = PostModel\findAll($conn);
    GLOBAL $zoneScripts;
    $zoneScripts .= '<script src="js/posts/index.js"></script>';
    include '../app/views/posts/index.php'; 
}

function showAction(\PDO $conn, int $id) {
    include_once '../app/models/postModel.php';
    $post = PostModel\findOneById($conn, $id);

    GLOBAL $title, $content, $zoneScripts;
    $title = $post['titre'];
    $zoneScripts = '<script src="js/posts/details.js"></script>';
    ob_start();
        include '../app/views/posts/details.php'; 
    $content = ob_get_clean();
}

function addFormAction(\PDO $conn) {
    GLOBAL $title, $content, $zoneScripts;
    ob_start();
        include '../app/views/posts/add.php'; 
    $content = ob_get_clean();
}

// ACTIONS AJAX

function AjaxOlderAction(\PDO $conn, int $offset) {
    include_once '../app/models/postModel.php';
    $posts = PostModel\findAll($conn, 10, $offset);
    include '../app/views/posts/list.php'; 
    
}
function AjaxUpdateFieldAction(\PDO $conn, int $id, string $field, string $value) {
    include_once '../app/models/postModel.php';
    echo PostModel\updateField($conn, $id, $field, $value); 
    
}

