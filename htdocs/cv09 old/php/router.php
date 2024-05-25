<?php

function route($url, $routes) {
    $route_found = false;
    
    foreach ($routes as $pattern => $handler) {
        // Replace the placeholders in the pattern with regex
        $pattern_regex = str_replace('/', '\/', $pattern);
        $pattern_regex = preg_replace('/{[\w-]+}/', '([\w-]+)', $pattern_regex);
        $pattern_regex = '/^' . $pattern_regex . '$/';
        
        // Check if the URL matches the pattern
        if (preg_match($pattern_regex, $url, $matches)) {
            $route_found = true;
            $params = array_slice($matches, 1);
            
            // Call the handler with the parameters
            call_user_func_array($handler, $params);
            break;
        }
    }
    
    // If no route is found, return an error message
    if (!$route_found) {
        header('HTTP/1.0 404 Not Found');
        var_dump($url);
        echo '404 Not Found';
    }
}


?>