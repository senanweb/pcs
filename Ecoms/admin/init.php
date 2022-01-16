<?php
    include 'connect.php';
   
    // Routes
    $tpl = 'includes/template/';  //Temp Directory
    $css = '../admin/layout/css/'; //Css Directory
    $js = '../admin/layout/js/'; //Js Directory
    $lang = '../admin/includes/languages/'; //lang Directory
    //include the import file    
    include $lang.'en.php';
    include $tpl.'header.php';
    if (!isset($noNavbar)){include $tpl.'navbar.php';}
    

    
    
    