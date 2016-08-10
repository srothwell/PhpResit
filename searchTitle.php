<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Search Title';
require_once('Models/Database.php');


if (isset($_POST['Submit'])) {
    $CDs = new Database;
    $view->CDs = $CDs->searchTitle($_POST['searchInput']);
} else {

}
require_once('Views/searchTitle.phtml');