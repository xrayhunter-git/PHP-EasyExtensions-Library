<?php
    session_start();

    // Load normal Libraries:
    $GLOBALS['extensions'] = array();
    spl_autoload_register(function($class) 
    {
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