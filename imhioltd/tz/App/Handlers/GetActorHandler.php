<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 28.03.18
 * Time: 16:15
 */

namespace Tz\App\Handlers;


use Tz\App\Commands\GetActor;
use Tz\Domain\Repository\ActorsRepository;

class GetActorHandler extends BaseHandler
{
    /**
     * @var ActorsRepository
     */
    private $actorsRepository;

    public function __construct(ActorsRepository $actorsRepository)
    {
        $this->actorsRepository = $actorsRepository;
    }

    public function handle(GetActor $command)
    {
        return $this->actorsRepository->find($command->id);
    }
}