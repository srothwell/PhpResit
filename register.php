<?php

$view = new stdClass();
$view->pageTitle = 'Register';
require_once('Models/Database.php');

if (isset($_POST['Submit'])) {

    $register = new Database();
    $register->addUser($_POST['email'],$_POST['password'],$_POST['address'],$_POST['phone']);
    header("Location: login.php");


}
require_once('Views/register.phtml');