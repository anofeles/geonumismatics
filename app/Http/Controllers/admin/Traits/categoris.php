<?php


namespace App\Http\Controllers\admin\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

trait categoris
{
    public function categorisviuv($local = 'ge')
    {

        App::setlocale($local);
        $coin = $this->Coin->model_query()->get();
        $group = $this->CoinGroups->model_query()->get();

        return view('admin.page.categori.viuv', compact('coin', 'group', 'local'));
    }

    public function categorisadd($local = 'ge', Request $request)
    {
        App::setlocale($local);
        if ($request->method() == 'POST') {
            $request->request->remove('_token');
            $data = ["group_id" => $request->group_id,
                "type_ge" => $request->type_ge,
                "type_en" => $request->type_en,
                "desc_ge" => $request->desc_ge,
                "desc_en" => $request->desc_en,
                "science_comment_ge" => $request->science_comment_ge,
                "science_comment_en" => $request->science_comment_en,
                "zarapkhana_ge" => $request->zarapkhana_ge,
                "zarapkhana_en" => $request->zarapkhana_en,
                "nominal_ge" => $request->nominal_ge,
                "nominal_en" => $request->nominal_en,
                "date_ge" => $request->date_ge,
                "date_en" => $request->date_en,
                "collection_ge" => $request->collection_ge,
                "collection_en" => $request->collection_en,
                "bibliography_ge" => $request->bibliography_ge,
                "bibliography_en" => $request->bibliography_en,
                "foreign_money_ge" => $request->foreign_money_ge,
                "foreign_money_en" => $request->foreign_money_en,
                'photo' => $request->photo1,
                'photo_id' => 0
            ];
            $add = $this->Coin->model_query()->insertGetId($data);

            if (isset($request->photo[0]) && !empty($request->photo[0])) {
                foreach ($request->photo as $file) {
                    $fileName = $file->getClientOriginalName()/*.'.'.$validData['file']->extension()*/
                    ;
                    $file->move(public_path('data/items/'.$add.'/'), $fileName);
                    $fileMedia[] = $fileName;
                }
            }
            if(isset($fileMedia)) {
                $this->Coin->model_query()->where('id', $add)->update(['photo' => $add]);
                foreach ($fileMedia as $fileMediaitem) {
                    $this->CoinPhotos->model_query()->insertGetId([
                        'photo_id' => $add,
                        'photo' => $fileMediaitem
                    ]);
                }
            }
        }
        $group = $this->CoinGroups->model_query()->get();
        return view('admin.page.categori.add', compact('local', 'group'));
    }

    public function categorisedit($local = 'ge', $catid = 0, Request $request)
    {
        App::setlocale($local);
        if ($request->method() == 'POST') {
            $request->request->remove('_token');
            $data = $request->input();
            $this->Coin->model_query()->where('id', $catid)->update($data);

            if (isset($request->photo[0]) && !empty($request->photo[0])) {
                foreach ($request->photo as $file) {
                    $fileName = $file->getClientOriginalName()/*.'.'.$validData['file']->extension()*/
                    ;
                    $file->move(public_path('data/items/'.$catid.'/'), $fileName);
                    $fileMedia[] = $fileName;
                }
            }
            if(isset($fileMedia)){
                foreach ($fileMedia as $fileMediaitem){
                    $this->CoinPhotos->model_query()->insertGetId([
                        'photo_id'=>$catid,
                        'photo'=>$fileMediaitem
                    ]);
                }
            }

        }
        $group = $this->CoinGroups->model_query()->get();
        $coin = $this->Coin->model_query()->where('id', '=', $catid)->first();
        $photo = $this->CoinPhotos->model_query()->where('photo_id', '=', $catid)->get();
        return view('admin.page.categori.edit', compact('coin', 'group', 'photo','local'));
    }

    public function categorisphoto($local = 'ge',$photoid = 0){
        App::setlocale($local);
        if($photoid > 0){
           $this->CoinPhotos->model_query()->where('id', '=', $photoid)->delete();
        }
        return back();
    }

    public function categorisdelete($local = 'ge', $catid = 0)
    {
        App::setlocale($local);
        if($catid > 0){
            $this->CoinPhotos->model_query()->where('photo_id', '=', $catid)->delete();
            $this->Coin->model_query()->where('id', '=', $catid)->delete();
        }
        return back();
    }
}
