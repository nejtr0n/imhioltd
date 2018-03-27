<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 10:29
 */

namespace Tz\Persistence\Sql\Model;

use Tz\Domain\Model\ActorCareerStatus as ActorCareerStatusContract;

class ActorCareerStatus extends BaseModel implements ActorCareerStatusContract
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
        $this->setSource('actor_career_status');
        $this->belongsTo(
            "id",
            Actor::class,
            "career_status_id"
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