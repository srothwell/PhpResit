<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Selected CD';

if (isset($_GET['add'])) {
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $_GET['add']);
    header("Location: basket.php");
} else {


    require_once('Models/Database.php');
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $CDs = new Database;
    $view->CDs = array();
    foreach ($_SESSION['cart'] as $id) {
        array_push($view->CDs, $CDs->fetchSelectedCD($id));
    }

    require_once('Views/basket.phtml');

}

