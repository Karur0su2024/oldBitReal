<?php
session_start();

require_once('../database/loadData.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == "insert") {
        $productsDatabase->insertProduct($_GET['name'], $_GET['category'], $_GET['price'], $_GET['image'], $_GET['description']);
    } else {
        $productsDatabase->editProduct($_GET['product_id'], $_GET['name'], $_GET['category'], $_GET['price'], $_GET['image'], $_GET['description']);
    }

    if ($_GET['action'] == "delete") {
        $productsDatabase->deleteProduct($_GET['product_id']);
    }
    
} else { 
    header("Location: databaseManager.php?database=products");
}







?>
