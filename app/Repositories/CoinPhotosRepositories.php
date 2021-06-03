<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\CoinPhotos;

class CoinPhotosRepositories extends Repository
{
    protected $CoinGroups;

    function __construct(
        CoinPhotos $CoinPhotos
    )
    {
        $this->CoinPhotos = $CoinPhotos;
    }

    public function model()
    {
        return $this->CoinPhotos->model_query();   // TODO: Implement model() method.
    }
}
