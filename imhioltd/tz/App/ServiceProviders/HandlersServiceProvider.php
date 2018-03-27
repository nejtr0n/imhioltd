<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 13:15
 */

namespace Tz\App\ServiceProviders;


use Phalcon\DiInterface;
use Tz\App\Handlers\GetActorHandler;
use Tz\App\Handlers\ListActorsHandler;
use Tz\App\Handlers\SearchActorsHandler;
use Tz\Domain\Repository\ActorsRepository;

class HandlersServiceProvider extends BaseServiceProvider
{
    public function register(DiInterface $di)
    {
        $di->set(
            ListActorsHandler::class,
            [
                'className' => ListActorsHandler::class,
                'arguments' => [
                    [
                        'type' => 'service',
                        'name' => ActorsRepository::class,
                    ],
                ]
            ]
        );
        $di->set(
            GetActorHandler::class,
            [
                'className' => GetActorHandler::class,
                'arguments' => [
                    [
                        'type' => 'service',
                        'name' => ActorsRepository::class,
                    ],
                ]
            ]
        );
        $di->set(
            SearchActorsHandler::class,
            [
                'className' => SearchActorsHandler::class,
                'arguments' => [
                    [
                        'type' => 'service',
                        'name' => ActorsRepository::class,
                    ],
                ]
            ]
        );
    }

}