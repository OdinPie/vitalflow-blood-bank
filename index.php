<?php

$request = $_SERVER['REQUEST_URI'];
$VIEWSDIR = '/views/';
// echo "<pre>";
// var_dump ($_SERVER);
// echo "</pre>";
switch( $request ) {
    case '/blood-bank-project':
    case '/blood-bank-project/':
    case '/blood-bank-project/home':  //look at the request uri. as the whole uri is given and not just /home or /contact, i had to use the whole
        require __DIR__ . $VIEWSDIR . 'home.php';
        break;
    
    case '/blood-bank-project/login':
        require __DIR__ . $VIEWSDIR . 'authentication/login.php';
        break;
    
    case '/blood-bank-project/register':
        require __DIR__ . $VIEWSDIR . 'authentication/register.php';
    break;
    
    default:
            http_response_code(404);
            require __DIR__  . '/error.php';
            break;

}