<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:54
 */

namespace Tz\App\ServiceProviders;

use Phalcon\DiInterface;

class AppServiceProvider extends BaseServiceProvider
{
    public function register(DiInterface $di)
    {
        $di->register(new BreadCrumbsServiceProvider());
        $di->register(new RepositoryServiceProvider());
        $di->register(new HandlersServiceProvider());
    }

}