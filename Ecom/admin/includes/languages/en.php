<?php
    function lang( $phrase )
    {
        static $lang = array(
            //home
            'Message' => ' Welcome',
            'Admin' => ' Administrator',
            //setting

            //Navbar
            'Home_Admin'        => 'Control',
            'Categories'        => 'Sections',
            'Items'             => 'Tools',
            'Members'           => 'Departments',            
            'Statistics'        => 'Static',
            'Logs'              => 'Locs',
        );
        return $lang[$phrase];
    }
    // $lang = array('salawe' => 'family');
    // echo $lang['salawe']


