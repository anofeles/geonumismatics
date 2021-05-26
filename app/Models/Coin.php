<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;

class Coin
{
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
