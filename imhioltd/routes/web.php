<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 27.03.18
 * Time: 11:12
 */

use Tz\App\Helpers\RouteGroup;

/** @var Phalcon\Mvc\Router $router */


$ns = 'Tz\Ui\Http\Controllers\Web';

$router->addGet("/", "${ns}\Index::index")->setName("index");


$actors = new class($ns) extends RouteGroup {
    public function mount(): RouteGroup
    {
        $this->setPaths([
            'namespace' => $this->namespace,
        ]);
        $this->setPrefix("/actors");
        $this->addGet("", "Actors::index")->setName("actors");
        $this->addGet("/{id:[0-9]+}", "Actors::show")->setName("actor");
        return $this;
    }
};

$router->mount($actors->mount());
