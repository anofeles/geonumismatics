<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;

class Lang
{
    public function get()
    {
        $data = DB::table('lang')->get();
        return $data;
    }

}
