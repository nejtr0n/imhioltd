<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 10:03
 */

namespace Tz\Ui\Http\Controllers\Web;

use Phalcon\Mvc\Controller;

abstract class BaseController extends Controller
{
    public function initialize()
    {
        $this->breadcrumbs->add('Home', $this->url->get(["for" => "index"]));
    }
}