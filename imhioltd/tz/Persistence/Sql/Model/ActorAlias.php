<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 9:11
 */

namespace Tz\Persistence\Sql\Model;

use Tz\Domain\Model\ActorAlias as ActorAliasContract;

class ActorAlias extends BaseModel implements ActorAliasContract
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    public function initialize()
    {
        $this->setSource('actor_aliases');
        $this->belongsTo(
            "actor_id",
            Actor::class,
            "id"
        );
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}