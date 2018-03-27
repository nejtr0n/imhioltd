<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 27.03.18
 * Time: 11:12
 */


use Tz\App\Helpers\RouteGroup;

$ns = 'Tz\Ui\Http\Controllers\Api';

$api = new class($ns) extends RouteGroup {
    public function mount(): RouteGroup
    {
        $this->setPaths([
            'namespace' => $this->namespace,
        ]);

        $this->setPrefix(config("api.prefix")."/actors");
        $this->addGet("/search", "Actors::search")->setName("search");

        return $this;
    }
};
$router->mount($api->mount());


