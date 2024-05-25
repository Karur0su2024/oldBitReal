<?php

require_once('database/database.php');

class CategoriesDatabase extends Database {
    public function getAll(){
        $sql = "SELECT * FROM `categories`";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getById($category_id){
        $query = "SELECT * FROM `categories` WHERE category_id= $category_id";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }
}

?>