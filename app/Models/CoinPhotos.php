<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CoinPhotos  extends Model
{
    public function model_query(){
        $data = DB::table('coin_photos');
        return $data;
    }

    public function get(){
        $data = DB::table('coin_photos')->get();
        return $data;
    }

    public function where($colum,$iqval='=',$value){
        $data = DB::table('coin_photos')->where($colum,$iqval,$value)->get();
        return $data;
    }
}
