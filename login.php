<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Log In';
require_once('Models/Database.php');

if (isset($_POST['Submit'])) {

    $loginCheck = new Database();
    if ($loginCheck->loginCheck($_POST['email'],$_POST['password']) > 0) {
        $userID = $loginCheck->loginCheck($_POST['email'],$_POST['password']);
        echo "WORKED";
        echo $userID;
        $SESSION['userID'] = $userID;
        $testsession = $_SESSION['userID'];
        echo $testsession;
    } else {
        echo "login failed";
    }




}
require_once('Views/login.phtml');