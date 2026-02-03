<?php
function myAutoLoad($class)
{
    // normalize namespace separators to directory separators and remove leading backslash
    $class = ltrim(str_replace('\\', '/', $class), '/');
    $file = 'classes/' . $class . '.php';

    if (file_exists($file)) {
        include $file;
    }
}

spl_autoload_register("myAutoLoad");

new Utilidades();
new Home\Inicial();
?>