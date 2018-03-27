<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 26.03.18
 * Time: 19:08
 */

namespace Tz\App;

use Phalcon\Di\FactoryDefault;
use Tz\App\Helpers\Singleton;
use Psr\Container\ContainerInterface;

/**
 * Di singleton wrapper
 * Class Container
 * @package Tz\App
 */
class Container extends FactoryDefault implements ContainerInterface
{
    use Singleton;

    /**
     * Container constructor.
     */
    private function __construct()
    {
        parent::__construct();
    }
}