<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 9:28
 */

use Phalcon\Mvc\Dispatcher;

$eventManager->attach(
    "dispatch:beforeException",
    function($event, Dispatcher $dispatcher, $exception)
    {
        switch ($exception->getCode()) {
            case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
            case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                $dispatcher->forward([
                    "namespace" => "Tz\Ui\Http\Controllers\Web",
                    'controller' => 'Error',
                    'action'     => 'show404',
                ]);
                return false;
            default:
                $dispatcher->forward([
                    "namespace" => "Tz\Ui\Http\Controllers\Web",
                    'controller' => 'Error',
                    'action'     => 'show500',
                    "params" => [
                        $exception,
                    ]
                ]);
                return false;
        }
    }
);