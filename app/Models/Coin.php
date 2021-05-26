<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table = 'coin';
    protected $fillable = [
        'id',
        'group_id',
        'type_ge',
        'type_en',
        'desc_ge',
        'desc_en',
        'photo',
        'photo_id',
        'science_comment_ge',
        'science_comment_en',
        'zarapkhana_ge',
        'zarapkhana_en',
        'nominal_ge',
        'nominal_en',
        'date_ge',
        'date_en',
        'collection_ge',
        'collection_en',
        'bibliography_ge',
        'bibliography_en',
        'foreign_money_ge',
        'foreign_money_en'
    ];

}
