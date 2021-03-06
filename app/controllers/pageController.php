<?php 

namespace App\Controllers\PageController;
use \App\Models\PageModel;

function showAction(\PDO $conn, int $id) {
    include_once '../app/models/pageModel.php';
    $page = PageModel\findOneById($conn , $id);

    GLOBAL $title, $content;
    $title = $page['titre'];
    ob_start();
        include '../app/views/pages/details.php';
    $content = ob_get_clean();
}

function menuAction(\PDO $conn, string $orderBy) {
    include_once '../app/models/pageModel.php';
    $pages = PageModel\findAll($conn , $orderBy);
    include '../app/views/pages/nav.php'; 
}