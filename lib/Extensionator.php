<?php
    class Extensionator
    {
        public static function addExtension($name, $dir)
        {
            if(is_null($GLOBALS['extensions']))
                $GLOBALS['extensions'] = array();

            array_push($GLOBALS['extensions'], array('name' => $name, 'dir' => $dir));
        }
    }
?>