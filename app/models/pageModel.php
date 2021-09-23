<?php

namespace App\Models\PageModel;

function findOneById(\PDO $conn, $id){
    $sql = "SELECT * 
            FROM pages
            WHERE id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findAll(\PDO $conn, string $orderBy){
    $sql = "SELECT * 
            FROM pages
            ORDER BY :orderBy ASC;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':orderBy', $orderBy, \PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}