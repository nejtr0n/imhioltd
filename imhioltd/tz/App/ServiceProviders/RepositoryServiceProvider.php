<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:57
 */

namespace Tz\App\ServiceProviders;

use Tz\Persistence\Sql\Repository\SqlActorsRepository;
use Phalcon\DiInterface;
use Tz\Domain\Repository\ActorsRepository;

class RepositoryServiceProvider extends BaseServiceProvider
{
    public function register(DiInterface $di)
    {
        $di->set(ActorsRepository::class, SqlActorsRepository::class);
    }

}