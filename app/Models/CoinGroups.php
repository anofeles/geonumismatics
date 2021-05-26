<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CoinGroups extends Model
{
    protected $table = 'coin_groups';
    protected $fillable = [
      'id','name_ge','name_en'
    ];

}
