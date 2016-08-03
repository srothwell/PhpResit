<?php

$view = new stdClass();
$view->pageTitle = 'Log In';
require_once('Models/Login.php');

if (isset($_POST['Submit'])) {

    $register = new Login();
    $register->loginCheck($_POST['email'],$_POST['password']);


}
require_once('Views/login.phtml');