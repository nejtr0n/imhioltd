<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 27.03.18
 * Time: 11:21
 */

use Phalcon\Mvc\Router;

$router = new Router();

$router->removeExtraSlashes(true);

$iterator = new DirectoryIterator(realpath(__DIR__. "/../routes/"));

foreach ($iterator as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->getExtension() == "php") {
        require $fileinfo->getRealPath();
    }
}

return $router;