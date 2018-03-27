<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 26.03.18
 * Time: 18:43
 */

use Phalcon\Mvc\Application;
use Tz\App\ServiceProviders\AppServiceProvider;

$loader = require __DIR__ . '/loader.php';

$container = app();

// Loader
$container->set(
    'loader',
    function () use ($loader) {
        return $loader;
    }
);

// Configuration
$container->set(
    'config',
    function () {
        return require __DIR__ . '/config.php';
    }
);

// Db
$container->set(
    'db',
    function () {
        return require __DIR__ . '/db.php';
    }
);

// Request
$container->setShared(
    "request",
    function () {
        return require __DIR__ . '/request.php';
    }
);

// Event manager
$eventManager = require __DIR__. '/event.php';

// Fix controller names
with($eventManager, function ($eventManager) {
    require __DIR__ . '/events/controllerFix.php';
});

// Error events
with($eventManager, function ($eventManager) {
    require __DIR__ . '/events/error.php';
});

// EventManager
$container->set(
    'eventsManager',
    function () use ($eventManager) {
        return $eventManager;
    },
    true
);

// Dispatcher
$container->set(
    'dispatcher',
    function () use ($eventManager) {
        return require __DIR__ . '/dispatcher.php';
    },
    true
);

$container->register(new AppServiceProvider());

// Command bus
$container->set(
    'bus',
    function () use ($container) {
        return require __DIR__ . '/bus.php';
    },
    true
);

// Router
$container->set(
    'router',
    function () {
        return require __DIR__ . '/router.php';
    }
);

// Url
$container->set(
    'url',
    function () {
        return require __DIR__ . '/url.php';
    }
);

// Views
$container->set(
    "view",
    function () {
        return require __DIR__ . '/view.php';
    }
);

return $container;