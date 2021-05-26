<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\Coin;

class CoinRepositories extends Repository
{
    public function model()
    {
     return Coin::class;   // TODO: Implement model() method.
    }

}
