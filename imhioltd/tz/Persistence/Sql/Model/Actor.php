<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 12:29
 */

namespace Tz\Persistence\Sql\Model;

use Tz\Domain\Model\Actor as ActorContract;

class Actor extends BaseModel implements ActorContract
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $country_id;
    protected $birthday;
    protected $birth_place;
    protected $career_status_id;
    protected $eyes_color;
    protected $hair_color;
    protected $boobs_size;
    protected $waist_size;
    protected $ass_size;

    public function initialize()
    {
        $this->setSource('actors');
        $this->hasOne(
            "country_id",
            Country::class,
            "id"
        );
        $this->hasMany(
            "id",
            ActorAlias::class,
            "actor_id"
        );
        $this->hasOne(
            "career_status_id",
            ActorCareerStatus::class,
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

    public function getCountry($parameters = null)
    {
        return $this->getRelated(Country::class, $parameters);
    }

    public function getAliases($parameters = null)
    {
        return $this->getRelated(ActorAlias::class, $parameters);
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->birth_place;
    }

    public function getCareerStatus($parameters = null)
    {
        return $this->getRelated(ActorCareerStatus::class, $parameters);
    }

    /**
     * @return mixed
     */
    public function getEyesColor()
    {
        return $this->eyes_color;
    }

    /**
     * @return mixed
     */
    public function getHairColor()
    {
        return $this->hair_color;
    }

    /**
     * @return mixed
     */
    public function getBoobsSize()
    {
        return $this->boobs_size;
    }

    /**
     * @return mixed
     */
    public function getWaistSize()
    {
        return $this->waist_size;
    }

    /**
     * @return mixed
     */
    public function getAssSize()
    {
        return $this->ass_size;
    }
}