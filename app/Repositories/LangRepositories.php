<?php


namespace App\Repositories;


use App\Http\Core\Database\Repository;
use App\Models\Lang;

class LangRepositories extends Repository
{
    public function model()
    {
     return Lang::class;   // TODO: Implement model() method.
    }

}
