<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller 
{
    function index($type)
    {
        $data['type'] = $type;
        $data['row']  = Policy::where('type',$type)->first();
        return view('backend.pages.policy.index',$data);
    }

    function save(Request $req)
    {
        $model = Policy::where('type',$req->type)->first();

        if(!$model) {
            $model = new Policy;
            $model->type = $req->type;
        }

        $model->title = $req->title;
        $model->lang = $req->lang;
        $model->content = $req->content;

        if($model->save()) {
            session()->flash('success', 'Data has been save successfully.');
            return back();
        } else {
            session()->flash('db_error', "something wrong.");
            return back();
        }
    }
}