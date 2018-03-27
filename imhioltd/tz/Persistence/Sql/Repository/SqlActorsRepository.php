<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:24
 */

namespace Tz\Persistence\Sql\Repository;

use Tz\Persistence\Sql\Model\Actor;
use Tz\Domain\Repository\ActorsRepository;
use Tz\Persistence\Sql\Model\ActorAlias;

class SqlActorsRepository implements ActorsRepository
{
    public function all()
    {
        return Actor::find();
    }

    public function find(int $id)
    {
        return Actor::findFirst($id);
    }

    public function search(string $search)
    {
        return Actor::query()
            ->leftJoin(ActorAlias::class, ActorAlias::class.'.actor_id = '.Actor::class.'.id')
            ->where(ActorAlias::class.".name ilike :search:"
                . " OR ".Actor::class.".name ilike :search:"
            )
            ->bind(['search' => '%' . $search .'%'])
            ->groupBy(Actor::class.".id")
            ->execute();
    }
}