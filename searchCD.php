<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Register';
require_once('Models/Database.php');


if (isset($_POST['Submit'])) {
    $CDs = new Database;

    $view->CDs = $CDs->searchCD($_POST['searchInput']);
}
require_once('Views/searchCD.phtml');