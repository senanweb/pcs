<?php
    // Categories -> [ Manage | Edit | Update | Add | Insert | Delete | Stats]
    //Manage

    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';    
    //-------------->>>>>
    //If The Page Is Main Page
    if ($do == 'Manage')
    {
        echo 'Welcome To Manage Page ';
        echo '<a href="?do=Add">Add New Category +</a>';
    }
    elseif ($do == 'Add')
    {
        echo ' Welcome To add Page';
    }
    elseif ($do == 'Insert')
    {
        echo ' Welcome To Insert Page';
    }
    else
    {
        echo ' Error There\'s No Page With This Name';
    }



?>


