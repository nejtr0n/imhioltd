<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 26.03.18
 * Time: 20:00
 */

use Phalcon\Config;
use Phalcon\Config\Adapter\Ini;

$config = new Config();

$iterator = new DirectoryIterator(realpath(__DIR__. "/../config/"));

foreach ($iterator as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->getExtension() == "php") {
        $config->offsetSet(
            pathinfo($fileinfo->getRealPath(), PATHINFO_FILENAME),
            require $fileinfo->getRealPath()
        );
    }
    if (!$fileinfo->isDot() && $fileinfo->getExtension() == "ini") {
        $config->merge(new Ini($fileinfo->getRealPath()));
    }
}

return $config;

