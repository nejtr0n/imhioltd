<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 9:31
 */

use Phalcon\Mvc\Dispatcher;

$dispatcher = new Dispatcher();

$dispatcher->setEventsManager($eventManager);

return $dispatcher;