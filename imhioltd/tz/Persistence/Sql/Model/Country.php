<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 8:55
 */

namespace Tz\Persistence\Sql\Model;


use Tz\Domain\Model\Country as CountryContract;

class Country extends BaseModel implements CountryContract
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
        $this->setSource('countries');
        $this->belongsTo(
            "id",
            Actor::class,
            "country_id"
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