<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:18
 */

namespace Tz\App\Handlers;

use Phalcon\Di\InjectionAwareInterface;
use Phalcon\DiInterface;

abstract class BaseHandler implements InjectionAwareInterface
{
    /**
     * @var DiInterface
     */
    protected $di;

    public function setDi(DiInterface $di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }
}