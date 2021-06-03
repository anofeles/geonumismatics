<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data extends Model
{
    public function model_query(){
        $data = DB::table('data');
        return $data;
    }

    public function get(){
        $data = DB::table('data')->get();
        return $data;
    }

    public function where($colum,$iqval='=',$value){
        $data = DB::table('data')->where($colum,$iqval,$value)->get();
        return $data;
    }
}
