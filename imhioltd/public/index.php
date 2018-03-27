<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 26.03.18
 * Time: 17:32
 */

use Phalcon\Mvc\Application;

/** @var Phalcon\Mvc\Application $application */
$container = require __DIR__ . '/../bootstrap/app.php';
$application = new Application($container);
$response = $application->handle();

$response->send();
