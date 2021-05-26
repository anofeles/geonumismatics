<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\CoinGroups;

class CoinGroupsRepositories extends Repository
{
    public function model()
    {
     return CoinGroups::class;   // TODO: Implement model() method.
    }

}
