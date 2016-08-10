<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Search Artist';
require_once('Models/Database.php');


if (isset($_POST['Submit'])) {
    $CDs = new Database;
    $view->CDs = $CDs->searchArtist($_POST['searchInput']);
} else {

}
require_once('Views/searchArtist.phtml');