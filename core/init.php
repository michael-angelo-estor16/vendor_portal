<?php
//Set Directories
defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
defined('BASEPATH') ? null : define('BASEPATH', $_SERVER["DOCUMENT_ROOT"]);
defined('CLASS_PATH') ? null : define('CLASS_PATH', BASEPATH.DS.'core'.DS.'classes');

require_once (BASEPATH.DS.'includes'.DS.'config.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function($className)
{
    $namespace=str_replace("\\",DS,__NAMESPACE__);
    $className=str_replace("\\",DS,$className);
    $class=CLASS_PATH.DS.(empty($namespace)?"":$namespace.DS)."{$className}.php";
    include_once($class);
});
