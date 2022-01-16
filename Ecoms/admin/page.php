<?php
    // manage = edit = update = add = insert = delete = static 
    // $do isset ($ GET['do']) ? $ GET['do'] : 'Manage;
 

    $do = '';
    if (isset($_GET['do']))
        {
            $do = $_GET['do'];
        }
        else {$do = 'Manage';}
    // Or you can change all this with == $do isset ($ GET['do']) ? $ GET['do'] : 'Manage;
    // MANAGE
    if ($do == 'Manage')
        {
            echo 'Welcome To Manage Page';
            echo ' <a href="page.php?do=Add">Add New Category +</a>';
            // or echo ' <a href="?do=Add">Add New Category +</a>';

        }
        //Add
        elseif ($do == 'Add')
        {
            echo 'Welcome To Manage Add';
        }
        //Insert
        elseif ($do == 'Insert')
        {
            echo 'Welcome To Manage Insert';
        }
        //Error
        else
        {
            echo 'Error There No page with this name';
        }