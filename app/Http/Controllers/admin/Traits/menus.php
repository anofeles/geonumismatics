<?php


namespace App\Http\Controllers\admin\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

trait menus
{
    public function menuviu($local='ge'){
        App::setlocale($local);
        $language = $this->Lang->model_query()->where('name','=',$local)->first();
        $Data = $this->Data->model_query()
            ->orWhere('foldername','=', 'contact')
            ->orWhere('foldername', '=', 'about_us')
            ->get();
        return view('admin.page.menu.viuv',compact('Data','language','local'));
    }

    public function menuedit($local='ge',$menuid=0,Request $request){
        App::setlocale($local);
        if($request->method() == 'POST'){
            $request->request->remove('_token');
            $data = [
              'subject' => $request->subject,
              'text' => $request->text
            ];
            $this->Data->model_query()->where('id', $menuid)->update($data);
        }
        if($menuid > 0){
            $Data = $this->Data->model_query()->where('id','=',$menuid)->first();
        }
        return view('admin.page.menu.edit',compact('local','Data'));
    }
}
