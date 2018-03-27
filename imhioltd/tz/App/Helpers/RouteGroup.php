<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 12:18
 */

namespace Tz\App\Helpers;

use Phalcon\Mvc\Router\Group;

abstract class RouteGroup extends Group
{
    protected $namespace;

    public function __construct($namespace, ?mixed $paths = null)
    {
        $this->namespace = $namespace;
        parent::__construct($paths);
    }

    abstract public function mount(): RouteGroup;
}