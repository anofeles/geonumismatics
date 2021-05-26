<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;

use App\Models\CoinGroups;
use App\Models\Lang;
use App\Models\Coin;
use App\Models\CoinPhotos;

class WebController extends Controller
{
    protected $CoinGroups,
    $Lang,
    $Coin,
    $CoinPhotos
    ;

    public function __construct(
        CoinGroups $CoinGroups,
        Lang $Lang,
        Coin $Coin,
        CoinPhotos $CoinPhotos
    )
    {
        $this->CoinGroups = $CoinGroups;
        $this->Lang = $Lang;
        $this->Coin = $Coin;
        $this->CoinPhotos = $CoinPhotos;
        view()->share('Lang',$this->Lang->get());
    }

    public function index($locale = 'ge'){
        return view('front.welcome',compact('locale'));
    }

    public function categori($locale = 'ge'){
        $CoinGroups = $this->CoinGroups->get();
        $Coin = $this->Coin->get();
        return view('front.categori',compact('CoinGroups','Coin','locale'));
    }

    public function type ($locale = 'ge',$typeid = 0){
        $Coin = $this->Coin->first($typeid);
        $CoinGroups = $this->CoinGroups->first($Coin->group_id);
        $CoinPhotos = $this->CoinPhotos->where('photo_id','=',$typeid);
        return view('front.type',compact('Coin','CoinGroups','locale','CoinPhotos'));
    }

}
