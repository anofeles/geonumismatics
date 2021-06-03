<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coin extends Model
{
    public function model_query(){
        $data = DB::table('coin');
        return $data;
    }

    public function get()
    {
        $data = DB::table('coin')->get();
        return $data;
    }

    public function first($id){
        $data = DB::table('coin')->where('id','=',$id)->first();
        return $data;
    }
}
