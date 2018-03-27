<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 8:54
 */

namespace Tz\Domain\Model;


interface Actor
{
    public function getId(): int;
    public function getName(): string;
}