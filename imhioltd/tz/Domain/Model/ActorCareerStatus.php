<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 10:28
 */

namespace Tz\Domain\Model;


interface ActorCareerStatus
{
    public function getId(): int;
    public function getName(): string;
}