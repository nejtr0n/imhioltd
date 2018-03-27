<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 16:29
 */

use Phalcon\Mvc\Url;

$url = new Url();

$url->setBaseUri("/");

return $url;