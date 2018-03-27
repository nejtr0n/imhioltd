<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 27.03.18
 * Time: 19:28
 */

namespace Tz\Ui\Http\Controllers\Web;

use Tz\App\Commands\GetActor;
use Tz\App\Commands\ListActors;
use League\Tactician\CommandBus;

class ActorsController extends BaseController
{
    public function initialize()
    {
        parent::initialize();
        $this->breadcrumbs->add('Actors', $this->url->get(["for" => "actors"]));
    }

    public function indexAction()
    {

        $command = new ListActors();
        $actors = $this->bus->handle($command);
        $this->view->setVar("actors", $actors);
    }

    public function showAction(int $id)
    {
        $command = new GetActor($id);
        $actor = $this->bus->handle($command);
        $this->view->setVar("actor", $actor);
        $this->breadcrumbs->add(
            "Actor ".$actor->getName(),
            $this->url->get(["for" => "actor", "id" => $id])
        );
    }
}