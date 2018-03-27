<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 11:36
 */

use League\Tactician\CommandBus;
use League\Tactician\Container\ContainerLocator;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor;
use League\Tactician\Handler\MethodNameInflector\HandleInflector;

$containerLocator = new ContainerLocator(
    $container,
    (array)config("services")
);

$commandHandlerMiddleware = new CommandHandlerMiddleware(
    new ClassNameExtractor(),
    $containerLocator,
    new HandleInflector()
);

return new CommandBus([
    $commandHandlerMiddleware,
]);