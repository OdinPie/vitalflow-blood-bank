<?php
require_once("views/authentication/config.php");
$email = isset($_SESSION["email"])? $_SESSION["email"] : '';
// echo 'emmail: '.$email.'';
if($email === 'admin@gmail.com'){
    include_once('views/admin/dashboard.php');
}else{
    http_response_code(404);
    include_once('error.php');
    die();
}