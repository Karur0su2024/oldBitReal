<?php


global $components;

$components = array(
    'carousel' => 'carousel_component',
    'offers' => 'offers_component',
    'pagination' => 'pagination_component',
    'productCard' => 'productCard_component',
    'sidebar' => 'sidebar_component',
    'navbar' => 'navbar_component',
    'footer' => 'footer_component',
);

function component($inserted){
    $component_found = false;
    global $components;

    foreach ($components as $component => $handler) {
        // Replace the placeholders in the pattern with regex
        $pattern_regex = str_replace('/', '\/', $component);
        $pattern_regex = preg_replace('/{[\w-]+}/', '([\w-]+)', $pattern_regex);
        $pattern_regex = '/^' . $pattern_regex . '$/';
        
        // Check if the URL matches the pattern
        if (preg_match($pattern_regex, $inserted, $matches)) {
            $component_found = true;
            $params = array_slice($matches, 1);
            
            // Call the handler with the parameters
            call_user_func_array($handler, $params);
            break;
        }
    }
    
    // If no route is found, return an error message
    if (!$component_found) {
        echo "Chyba!";
    }
}


function carousel_component() {
    include('carousel.php');
}

function offers_component() {
    include('offers.php');
}

function pagination_component() {
    include('pagination.php');
}

function productCard_component() {
    include('productCard.php');
}

function sidebar_component() {
    include('sidebar.php');
}

function navbar_component() {
    include('navbar.php');
}

function footer_component() {
    include('navbar.php');
}




