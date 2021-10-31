<?php
    function lang($phrase)
    {
        static $lang = array
        (
            'Message' => ' أهلا',
            'Admin' => ' مدير',
        );
        return $lang[$phrase];
    }

?>