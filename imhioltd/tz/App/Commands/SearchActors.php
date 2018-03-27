<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 12:54
 */

namespace Tz\App\Commands;


class SearchActors
{
    public $search;

    /**
     * SearchCommand constructor.
     * @param string $search
     */
    public function __construct(string $search)
    {
        $this->search = $search;
    }
}