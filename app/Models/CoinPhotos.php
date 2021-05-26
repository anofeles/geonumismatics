<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;

class CoinPhotos
{
    public function get(){
        $data = DB::table('coin_photos')->get();
        return $data;
    }

    public function where($colum,$iqval='=',$value){
        $data = DB::table('coin_photos')->where($colum,$iqval,$value)->get();
        return $data;
    }
}
