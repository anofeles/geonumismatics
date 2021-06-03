<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\Coin;

class CoinRepositories extends Repository
{
      protected $Coin;

    function __construct(
        Coin $Coin
    )
    {
      $this->Coin = $Coin;
    }

    public function model()
    {
     return $this->Coin->model_query();   // TODO: Implement model() method.
    }

}
