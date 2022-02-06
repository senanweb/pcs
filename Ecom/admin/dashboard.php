<?php
//SESSION
session_start();
//print_r($_SESSION);

if (isset($_SESSION['name'])) {
    //header('Location:dashboard.php'); // Redirect To Dashboard Page
    $pageTitle = 'Dashboard';
    include 'init.php';
    echo 'Welcome';
    include $tpl . "footer.php";
} 
else {
    //echo 'You Are Not Authorized To View This Page';
    header ('Location: index.php');
    exit();
}