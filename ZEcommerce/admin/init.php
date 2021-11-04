<?php
    include 'connect.php';
    include 'includes/languages/en.php';
    // Routes
    $tpl = 'includes/template/';  //Temp Directory
    $css = '../admin/layout/css/'; //Css Directory
    $js = '../admin/layout/js/'; //Js Directory
    $lang = '../admin/includes/languages/'; //lang Directory
    //include the import file    
    include $tpl.'header.php';
    include $tpl.'footer.php';

    if (!isset($noNavbar)){include $tpl.'navbar.php';}
    
    