<?php
    function lang($phrase)
    {
        static $lang = array
        (
            'Message' => ' أهلا',
            'Admin' => ' مدير',
              //setting

            //Dashboard
            'Home_Admin' => ' الادارة',
            
        );
        return $lang[$phrase];
    }

?>