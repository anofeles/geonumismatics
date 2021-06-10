<?php


namespace App\Http\Controllers\admin\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

trait pages
{

    public function groupviu($local='ge'){
        App::setLocale($local);
        $group = $this->CoinGroups->model_query()->get();
        return view('admin.page.group.viuv', compact('group', 'local'));
    }

    public function groupadd($local='ge',Request $request){
        App::setLocale($local);
        if($request->method() == 'POST'){
            $request->request->remove('_token');
            $data = $request->input();
            $this->CoinGroups->model_query()->insertGetId($data);
        }
        return view('admin.page.group.add', compact('local'));
    }

    public function groupedit($local='ge',$groupid=0,Request $request){
        App::setLocale($local);
        if($request->method() == 'POST'){
            $request->request->remove('_token');
            $data = $request->input();
            $this->CoinGroups->model_query()->where('id', $groupid)->update($data);
        }
        $CoinGroups = $this->CoinGroups->model_query()->where('id', $groupid)->first();
        return view('admin.page.group.edit', compact('local','CoinGroups'));
    }

    public function groupdelete($local='ge',$groupid=0){
        App::setLocale($local);
        $this->CoinGroups->model_query()->where('id', $groupid)->delete();
        return back();
    }
}
