<?php
session_start();

$page = 'accueil';
if (isset($GET['page']) && !empty($GET['page'])) {
    $page = $_GET['page'];
}
include 'header.php';
include $page . '.php';
include 'footer.php';
