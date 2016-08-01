<?php

$view = new stdClass();
$view->pageTitle = 'Register';
require_once('Models/Register.php');

if (isset($_POST['Submit'])) {
    $register = new Register();
    $register->addUser($_POST['email'],$_POST['password'],$_POST['address'],$_POST['phone']);


}
require_once('Views/register.phtml');