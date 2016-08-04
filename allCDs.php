<?php
require_once('Models/Database.php');
$view = new stdClass();
$view->pageTitle = 'All CDs';

$CDs = new Database;

$view->CDs = $CDs->fetchAllCD();

require_once('Views/allCds.phtml');