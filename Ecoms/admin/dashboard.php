<?php     
    // session start
    session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['name']))
    {
        // echo 'Welcome To your page Mr.'  . $_SESSION['name'];
        include 'init.php';       
        echo 'welcome';
        include $tpl.'footer.php';
    }
    else
    {
        header('Location: index.php');
        exit();
    }
    // check user with session
    // ------------------------>>>>>
    

