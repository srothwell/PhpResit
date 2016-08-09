<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Logged Out';


session_destroy();

require_once('Views/logout.phtml');