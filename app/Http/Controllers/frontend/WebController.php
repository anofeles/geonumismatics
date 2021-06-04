<?php


namespace App\Http\Controllers\frontend;


use App\Http\Controllers\Controller;

use App\Models\CoinGroups;
use App\Models\Lang;
use App\Models\Coin;
use App\Models\CoinPhotos;
use App\Models\Data;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebController extends Controller
{
    protected $CoinGroups,
        $Lang,
        $Coin,
        $CoinPhotos,
    $Data
    ;

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
        view()->share('data',$this->Data->model_query()
            ->orWhere('foldername','=','contact')
            ->orWhere('foldername','=','about_us')
            ->get());
        view()->share('Lang', $this->Lang->get());
    }

    public function index($locale = 'ge')
    {
        App::setLocale($locale);
        return view('front.welcome', compact('locale'));
    }

    public function categori($locale = 'ge')
    {
        App::setLocale($locale);
        $CoinGroups = $this->CoinGroups->get();
        $Coin = $this->Coin->get();
        return view('front.categori', compact('CoinGroups', 'Coin', 'locale'));
    }

    public function type($locale = 'ge', Request $request)
    {
        App::setLocale($locale);
        $typeid = $request->typeid;
        $Coin = $this->Coin->first($typeid);
        $CoinGroups = $this->CoinGroups->first($Coin->group_id);
        $CoinPhotos = $this->CoinPhotos->where('photo_id', '=', $typeid);
        return view('front.type', compact('Coin', 'CoinGroups', 'locale', 'CoinPhotos'));
    }

    public function serchForm($locale = 'ge', Request $request)
    {
        App::setLocale($locale);
        return view('front.search_form', compact('locale'));
    }

    public function serach($locale = 'ge', Request $request)
    {
        App::setLocale($locale);
        if ($request->method() == 'POST') {
            $coin = $this->Coin->qumodel_queryery();
            $CoinGroups = $this->CoinGroups->model_query();
            if (!empty($request->group)) {
                $CoinGroups->orWhere('name_ge', 'LIKE', "%$request->group%")->orWhere('name_en', 'LIKE', "%$request->group%");
            }
            if (!empty($request->type)) {
                $coin->orWhere('type_ge', 'LIKE', "%$request->type%")->orWhere('type_en', 'LIKE', "%$request->type%");
            }
            if (!empty($request->desc)) {
                $coin->orWhere('desc_ge', 'LIKE', "%$request->desc%")->orWhere('desc_en', 'LIKE', "%$request->desc%");
            }
            if (!empty($request->mint)) {
                $coin->orWhere('zarapkhana_ge', 'LIKE', "%$request->mint%")->orWhere('zarapkhana_en', 'LIKE', "%$request->mint%");
            }
            if (!empty($request->nom)) {
                $coin->orWhere('nominal_ge', 'LIKE', "%$request->nom%")->orWhere('nominal_en', 'LIKE', "%$request->nom%");
            }
            if (!empty($request->dat)) {
                $coin->orWhere('date', 'LIKE', "%$request->dat%");
            }
            if (!empty($request->coll)) {
                $coin->orWhere('collection_ge', 'LIKE', "%$request->coll%")->orWhere('collection_en', 'LIKE', "%$request->coll%");
            }
            if (!empty($request->for)) {
                $coin->orWhere('foreign_money_ge', 'LIKE', "%$request->for%")->orWhere('foreign_money_en', 'LIKE', "%$request->for%");
            }

            if (empty($request->group)) {
                foreach ($coin->get() as $item) {
                    $CoinGroups->where('id', '=', $item->group_id);
                }
            }

            $coingroprov = $CoinGroups->get();
            $coinrov = $coin->get();
        }
        return view('front.search',compact('locale','coingroprov','coinrov'));
    }

    public function serchtop($locale = 'ge', Request  $request){
        App::setLocale($locale);
        $search = $request->q;
        $Data = $this->Data->model_query();
        $Data->orWhere('text', 'LIKE', "%$search%");
        $Datarov = $Data->get();

        return view('front.serchtop',compact('locale','Datarov'));
    }

}
