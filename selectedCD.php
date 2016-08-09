<?php

$view = new stdClass();
$view->pageTitle = 'Selected CD';

require_once('Models/Database.php');

$CDs = new Database;
$id = $_GET['id'];
$view->CDs = $CDs->fetchSelectedCD($id);

require_once('Views/selectedCd.phtml');




