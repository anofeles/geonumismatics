<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lang  extends Model
{
    public function model_query(){
        $data = DB::table('lang');
        return $data;
    }

    public function get()
    {
        $data = DB::table('lang')->get();
        return $data;
    }


}
