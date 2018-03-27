<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 12:25
 */

namespace Tz\Ui\Http\Controllers\Api;

use Phalcon\Mvc\Controller;

abstract class BaseController extends Controller
{
    public function initialize()
    {
        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
    }
}