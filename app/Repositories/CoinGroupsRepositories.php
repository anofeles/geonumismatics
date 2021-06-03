<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\CoinGroups;

class CoinGroupsRepositories extends Repository
{
    protected $CoinGroups;

    function __construct(
        CoinGroups $CoinGroups
    )
    {
      $this->CoinGroups = $CoinGroups;
    }

    public function model()
    {
     return $this->CoinGroups->model_query();   // TODO: Implement model() method.
    }

}
