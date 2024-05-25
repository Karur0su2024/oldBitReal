<?php


require_once('categoriesDB.php');
require_once('productsDB.php');







$maxProducts = 8;



if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

function getCategories(){
    $categoriesDatabase = new CategoriesDatabase;
    $categories = $categoriesDatabase->getAll();
    return $categories;
}

function getProducts(){
    $productsDatabase = new ProductsDatabase;
    if (isset($_GET['category_id'])) {
        $products = $productsDatabase->getByCategory($_GET['category_id']);
    } else {
        $products = $productsDatabase->getAll();
    }
    
    return $products;
}



?>