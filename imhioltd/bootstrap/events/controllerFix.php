<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 10:01
 */

use Phalcon\Mvc\Dispatcher;
use Phalcon\Text;

$eventManager->attach(
    'dispatch:beforeDispatchLoop',
    function ($event, Dispatcher $dispatcher) {
        $controller = Text::camelize($dispatcher->getControllerName());
        $dispatcher->setControllerName($controller);
    }
);