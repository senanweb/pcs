<?php
    include 'connect.php';
   
    // Routes
    $tpl = 'includes/template/';  //Temp Directory
    $lang = 'includes/languages/'; //lang Directory
    $fun = 'includes/functions/';
    $css = '../Admin/layout/css/'; //Css Directory
    $js = '../Admin/layout/js/'; //Js Directory
    
    //include the import file
    include $fun.'function.php';    
    include $lang.'en.php';
    include $tpl.'header.php';
   
    // Include Navbar On All Pages Expect The One With SnoNavbar Variable
    if (!isset($noNavbar)){include $tpl.'navbar.php';}
    

    
    
    