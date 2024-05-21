<?php

$request = $_SERVER['REQUEST_URI'];
$VIEWSDIR = '/views/';
$id = isset($_GET['id']) ? $_GET['id'] :'';
$content_id = isset($_GET['content_id']) ? $_GET['content_id'] :'';

switch( $request ) {
    case '/blood-bank-project':
    case '/blood-bank-project/':
    case '/blood-bank-project/home':  //look at the request uri. as the whole uri is given and not just /home or /contact, i had to use the whole
        require __DIR__ . $VIEWSDIR . 'home.php';
        break;
    
    case '/blood-bank-project/login':
        require __DIR__ . $VIEWSDIR . 'authentication/login.php';
        break;
    
    case '/blood-bank-project/logout':
        require __DIR__ . $VIEWSDIR . 'authentication/logout.php';
        break;
    
    case '/blood-bank-project/register':
        require __DIR__ . $VIEWSDIR . 'authentication/register.php';
    break;

    case '/blood-bank-project/blood-request':
        require __DIR__ . $VIEWSDIR . 'profile\bloodRequest\bloodRequest.php';
        break;
    case '/blood-bank-project/profile?id='.$id:
        require __DIR__ . $VIEWSDIR . 'profile\dashboard\dashboard.php';
        break;
    case '/blood-bank-project/educational':
        require __DIR__ . $VIEWSDIR . 'educational\educational.php';
        break;
    case '/blood-bank-project/educational?content_id='.$content_id:
        require __DIR__ . $VIEWSDIR . 'educational\content.php';
        break;
    case '/blood-bank-project/donors':
        require __DIR__ . $VIEWSDIR . 'donors\donors.php';
        break;
    case '/blood-bank-project/blood-request-posts':
        require __DIR__ . $VIEWSDIR . 'postBlood\postBlood.php';
        break;
    case '/blood-bank-project/admin':
        require __DIR__ . $VIEWSDIR . 'admin\adminrouter.php';
        break;
    default:
            http_response_code(404);
            require __DIR__  . '/error.php';
            break;

}