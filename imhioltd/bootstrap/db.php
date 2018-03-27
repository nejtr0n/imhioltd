<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 13:33
 */

use Phalcon\Db\Adapter\Pdo\Factory;

return Factory::load(config("database"));