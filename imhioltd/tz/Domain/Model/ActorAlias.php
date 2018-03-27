<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 9:14
 */

namespace Tz\Domain\Model;


interface ActorAlias
{
    public function getId(): int;
    public function getName(): string;
}