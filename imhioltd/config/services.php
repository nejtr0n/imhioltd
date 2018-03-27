<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 11:48
 */

use Tz\App\Commands\GetActor;
use Tz\App\Commands\ListActors;
use Tz\App\Commands\SearchActors;
use Tz\App\Handlers\GetActorHandler;
use Tz\App\Handlers\ListActorsHandler;
use Tz\App\Handlers\SearchActorsHandler;

return [
    ListActors::class => ListActorsHandler::class,
    GetActor::class => GetActorHandler::class,
    SearchActors::class => SearchActorsHandler::class,
];