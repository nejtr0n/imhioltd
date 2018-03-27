<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 12:55
 */

namespace Tz\App\Handlers;


use Tz\App\Commands\SearchActors;
use Tz\Domain\Repository\ActorsRepository;

class SearchActorsHandler extends BaseHandler
{
    /**
     * @var ActorsRepository
     */
    private $actorsRepository;

    public function __construct(ActorsRepository $actorsRepository)
    {
        $this->actorsRepository = $actorsRepository;
    }

    public function handle(SearchActors $command)
    {
        return $this->actorsRepository->search($command->search);
    }
}