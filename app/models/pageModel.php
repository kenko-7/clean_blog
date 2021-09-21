<?php

namespace App\Models\PageModel;

function findOneById(\PDO $conn, $id){
    $sql = 'SELECT * 
            FROM pages
            WHERE id = :id;';
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}