<?php
    function lang($phrase)
    {
        static $lang = array
        (
            //home
            'Message' => ' Welcome',
            'Admin' => ' Administrator',
            //setting
        );
        return $lang[$phrase];
    }



    // $lang = array('salawe' => 'family');
    // echo $lang['salawe']
?>