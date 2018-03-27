<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 15:57
 */

namespace Tz\App\ServiceProviders;

use Phalcon\DiInterface;
use Tz\App\Helpers\BreadCrumbs;

class BreadCrumbsServiceProvider extends BaseServiceProvider
{
    public function register(DiInterface $di)
    {
        $di->setShared('breadcrumbs', function () use ($di) {
            $manager = $di->getShared("eventsManager");
            return tap(new Breadcrumbs, function (Breadcrumbs $breadcrumbs) use ($manager) {
                $manager->attach('breadcrumbs:beforeOutput', function ($event, $breadcrumbs) {
                    $breadcrumbs->disableLast();
                });
                $breadcrumbs->setSeparator('&nbsp;&raquo;&nbsp;');
                $breadcrumbs->setEventsManager($manager);
            });
        });
    }
}