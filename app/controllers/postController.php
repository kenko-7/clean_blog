<?php 


namespace App\Controllers\PostController;
use \App\Models\PostsModel;

function indexAction (\PDO $conn) {
    
    include_once '../app/models/postModel.php';
    $posts = PostsModel\findAll($conn);
    GLOBAL $content;
    ob_start();
        include '../app/views/posts/index.php';
    $content = ob_get_clean();
}