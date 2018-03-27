<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 27.03.18
 * Time: 13:33
 */

$loader = new \Phalcon\Loader();

$loader->registerNamespaces([
    "Tz" => "../tz",
]);

$loader->registerFiles([
    '../helpers/functions.php',
    '../vendor/autoload.php',
]);

$loader->register();

return $loader;