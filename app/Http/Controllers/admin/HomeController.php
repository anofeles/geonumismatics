<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\Traits\categoris;
use App\Http\Controllers\admin\Traits\menus;
use App\Http\Controllers\admin\Traits\pages;
use App\Http\Controllers\Controller;

use App\Models\Data;
use App\Models\Coin;
use App\Models\CoinGroups;
use App\Models\CoinPhotos;
use App\Models\Lang;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    use pages,menus,categoris;

    protected $data;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CoinGroups $CoinGroups,
        Lang $Lang,
        Coin $Coin,
        CoinPhotos $CoinPhotos,
        Data $Data
    )
    {
        $this->CoinGroups = $CoinGroups;
        $this->Lang = $Lang;
        $this->Coin = $Coin;
        $this->CoinPhotos = $CoinPhotos;
        $this->Data = $Data;
        view()->share('lang', $this->Lang->get());
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($local = 'ge')
    {
        App:setlocale($local);
        $page = $this->Data->model_query()
            ->orWhere('foldername','=','contact')
            ->orWhere('foldername','=','about_us')
            ->get();

        return view('admin.home',compact('page'));
    }
}
