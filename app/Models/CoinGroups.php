<?php


namespace App\Models;




use Illuminate\Support\Facades\DB;


class CoinGroups
{
    public function query(){
        $data = DB::table('coin_groups');
        return $data;
    }


    public function get()
    {
        $data = DB::table('coin_groups')->get();
        return $data;
    }

    public function first($id){
        $data = DB::table('coin_groups')->where('id','=',$id)->first();
        return $data;
    }
}
