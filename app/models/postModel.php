<?php

namespace App\Models\PostsModel;

function findall(\PDO $conn) :array {
    $sql = 'SELECT * 
            FROM posts
            ORDER BY datePublication desc
            LIMIT 4;';
    $rs = $conn->query($sql);
  
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}