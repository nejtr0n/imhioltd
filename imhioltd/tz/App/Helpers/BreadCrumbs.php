<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 16:52
 */

namespace Tz\App\Helpers;

use Phalcon\Breadcrumbs as PhalconBreadcrumbs;

class BreadCrumbs extends PhalconBreadcrumbs
{
    public function disableLast()
    {
        $last = end(array_keys($this->elements));
        if (!empty($last)) {
            $this->elements[$last]["linked"] = false;
        }
    }
}