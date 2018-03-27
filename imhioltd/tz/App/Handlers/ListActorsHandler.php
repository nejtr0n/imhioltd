<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 11:54
 */

namespace Tz\App\Handlers;

use Tz\App\Commands\ListActors;
use Tz\Domain\Repository\ActorsRepository;

class ListActorsHandler extends BaseHandler
{
    /**
     * @var ActorsRepository
     */
    private $actorsRepository;

    public function __construct(ActorsRepository $actorsRepository)
    {
        $this->actorsRepository = $actorsRepository;
    }

    public function handle(ListActors $command)
    {
        return $this->actorsRepository->all();
    }
}