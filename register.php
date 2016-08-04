<?php

$view = new stdClass();
$view->pageTitle = 'Register';
require_once('Models/Database.php');
require_once('Models/Validation.php');

if (isset($_POST['Submit'])) {
    $validator = new Validation();
    if ($validator->validateRegistration($_POST['email'], $_POST['password'],$_POST['confirmPassword'], $_POST['address'], $_POST['phone']) === true) {
        $register = new Database();
        $register->addUser($_POST['email'], $_POST['password'], $_POST['address'], $_POST['phone']);
        header("Location: login.php");
    } else {

    }

}
require_once('Views/register.phtml');