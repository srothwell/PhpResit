<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Search Genre';
require_once('Models/Database.php');


if (isset($_POST['Submit'])) {
    $CDs = new Database;
    $view->CDs = $CDs->searchGenre($_POST['searchInput']);
} else {

}
require_once('Views/searchGenre.phtml');