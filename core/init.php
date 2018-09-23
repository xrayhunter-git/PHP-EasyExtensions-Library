<?php
    session_start();

    // Load normal Libraries:
    $GLOBALS['extensions'] = array();
    spl_autoload_register(function($class) {
        
        /*$str = explode('_', $class);
        foreach ($_GLOBALS['extensions'] as $extension)
        {
            if (in_array($str[count($str) - 1], $extension['name']))
            {
                require_once 'lib/extensions/' . (isset($extension['dir']) ? $extension['dir'] . '/' : '') . $class . '.php';
                return;
            }
        }

        require_once "lib/" . $class . ".php";
        */

        if (file_exists('lib/' . $class . '.php'))
            require_once "lib/" . $class . ".php";
        else
        {
            foreach ($GLOBALS['extensions'] as $extension)
            {
                if (file_exists('lib/extensions/' . (isset($extension['dir']) ? $extension['dir'] . '/' : '') . $class . '.php'))
                    require_once 'lib/extensions/' . (isset($extension['dir']) ? $extension['dir'] . '/' : '') . $class . '.php';
            }
        }

    });
?>