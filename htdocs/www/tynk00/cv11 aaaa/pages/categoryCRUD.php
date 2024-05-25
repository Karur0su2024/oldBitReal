<?php
session_start();
require_once('../database/loadData.php');
include('../components/header.php');



if (isset($_GET['action'])) {
    require_once('../database/loadData.php');

    if ($_GET['action'] == "insert") {
        $categoriesDatabase->insertCategory($_GET['name'], $_GET['image']);
    } else {
        $categoriesDatabase->editCategory($_GET['category_id'], $_GET['name'], $_GET['image']);
    }

    if (isset($_GET['action'])) {
        if ($_GET['action'] == "delete") {
            $categoriesDatabase->deleteCategory($_GET['category_id']);
        }
    }
    
} else {
    header("refresh:0;url=databaseManager.php");
}




?>



