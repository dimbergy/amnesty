<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 29/8/20
 * Time: 6:27 PM
 */

function __autoload($class_name) {

    if(file_exists('classes/'.$class_name.'.class.php')) {
        require_once 'classes/'.$class_name.'.class.php';
    } elseif (file_exists('Controllers/'.$class_name.'.class.php')) {
        require_once 'Controllers/'.$class_name.'.class.php';
    } elseif (file_exists('Models/'.$class_name.'.class.php')) {
        require_once 'Models/'.$class_name.'.class.php';
    }

}
