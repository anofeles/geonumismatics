<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $table = 'lang';
    protected $fillable = [
      'id','orderby','name','l'
    ];

}