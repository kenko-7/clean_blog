<?php 

namespace App\Controllers\PostController;
use \App\Models\PostModel;


function indexAction(\PDO $conn) {
    include_once '../app/models/postModel.php';
    $posts = PostModel\findAll($conn);
    include '../app/views/posts/index.php'; 
}

function showAction(\PDO $conn, int $id) {
    include_once '../app/models/postModel.php';
    $post = PostModel\findOneById($conn, $id);

    GLOBAL $title, $content;
    $title = $post['titre'];
    ob_start();
        include '../app/views/posts/details.php'; 
    $content = ob_get_clean();
}