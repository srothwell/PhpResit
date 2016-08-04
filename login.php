<?php

$view = new stdClass();
$view->pageTitle = 'Log In';
require_once('Models/Databse.php');

if (isset($_POST['Submit'])) {

    $loginCheck = new Database();
    $loginCheck->loginCheck($_POST['email'],$_POST['password']);


}
require_once('Views/login.phtml');