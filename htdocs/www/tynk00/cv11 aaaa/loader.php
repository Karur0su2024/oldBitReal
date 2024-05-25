<?php

class Loader
{

    public function __construct()
    {
    }

    public function imageUrl($name)
    {
        echo ('../img/' . $name);
    }

}

if (isset($_COOKIE['session_key'])) {
    if (isset($_SESSION[$_COOKIE['session_key']])) {
        $loggedUser = $_SESSION[$_COOKIE['session_key']];
    }
} else {
    $loggedUser = null;
}


require_once('cartModel.php');
require_once('redirector.php');


function getCurrentUrlWithoutParams()
{
    // Get the current URL without any query parameters
    $url = 'http';
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $url .= "s";
    }
    $url .= "://";
    $url .= $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] !== '80') {
        $url .= ':' . $_SERVER['SERVER_PORT'];
    }
    $url .= $_SERVER['PHP_SELF'];

    return $url;
}



$loader = new Loader();
