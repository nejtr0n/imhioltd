<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 10:03
 */

namespace Tz\Ui\Http\Controllers\Web;

class ErrorController extends BaseController
{
    public function show404Action()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }

    public function show500Action()
    {

    }
}