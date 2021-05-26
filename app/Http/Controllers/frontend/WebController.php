<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;

use App\Repositories\CoinGroupsRepositories;
use App\Repositories\LangRepositories;
use App\Repositories\CoinRepositories;

class WebController extends Controller
{
    protected $CoinGroupsRepositories,
    $LangRepositories,
    $CoinRepositories
    ;

    public function __construct(
        CoinGroupsRepositories $CoinGroupsRepositories,
        LangRepositories $LangRepositories,
        CoinRepositories $CoinRepositories
    )
    {
        $this->CoinGroupsRepositories = $CoinGroupsRepositories;
        $this->LangRepositories = $LangRepositories;
        $this->CoinRepositories = $CoinRepositories;
//        view()->share('Lang',$this->LangRepositories->get());
    }

    public function index($locale = 'ge'){
        return view('front.welcome',compact('locale'));
    }

    public function categori($locale = 'ge'){
        $CoinGroups = $this->CoinGroupsRepositories->get();
        $Coin = $this->CoinRepositories->get();
        return view('front.categori',compact('CoinGroups','Coin','locale'));
    }

}
