<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 16:15
 */

namespace Tz\App\Commands;


class GetActor
{
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}