<?php
    function lang( $phrase )
    {
        static $lang = array(
            //home
            'Message' => ' Welcome',
            'Admin' => ' Administrator',
            //setting

            //Dashboard
            'Home_Admin'        => ' Admin-Page',
            'Categories'        => 'Group',
            'Items'             => 'Tools',
            'Members'           => 'Departments',            
            'Statistics'        => 'Static',
            'Logs'              => 'Locs',
        );
        return $lang[$phrase];
    }


    // $lang = array('salawe' => 'family');
    // echo $lang['salawe']


