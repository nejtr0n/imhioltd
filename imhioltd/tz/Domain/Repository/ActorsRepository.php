<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:04
 */

namespace Tz\Domain\Repository;


interface ActorsRepository
{
    public function all();
    public function find(int $id);
    public function search(string $search);
}