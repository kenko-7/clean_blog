<?php

namespace App\Models\PostModel;


function findAll(\PDO $conn, int $limit = 10, int $offset = 0){
    $sql = "SELECT * 
            FROM posts
            ORDER BY datePublication DESC
            LIMIT :limit
            OFFSET :offset;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
    $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $conn, $id){
    $sql = "SELECT * 
            FROM posts
            WHERE id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}

function updateField(\PDO $conn, int $id, string $field, string $value){
    $sql = "UPDATE posts 
            SET `$field` = :value
            WHERE id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->bindValue(':value', $value, \PDO::PARAM_STR);
    return ($rs->execute())?1:0;
}