<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 29.03.18
 * Time: 12:25
 */

namespace Tz\Ui\Http\Controllers\Api;

use Tz\App\Commands\SearchActors;

class ActorsController extends BaseController
{
    public function searchAction()
    {
        $command = new SearchActors($this->request->get("q", "string") ?: "");
        $actors = $this->bus->handle($command);
        // Убираем ненужные поля
        $data = array_map(
            function ($item) use ($actors) {
                return array_only($item, ["id", "name"]);
            },
            $actors->toArray()
        );
        return json_encode($data);

    }
}