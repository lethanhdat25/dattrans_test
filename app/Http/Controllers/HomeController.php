<?php

namespace App\Http\Controllers;

use App\Models\ListTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    //
    public function admin(){
        if (!Gate::allows('isAdmin')){
            abort(403);
        }
        return view("admin");

    }
    public function list(){
        $list=ListTable::all();
        return view("list",["list"=>$list]);
    }
    public function detail(Request $request,$id){
        $list=ListTable::findOrFail($id);
        if ($request->user()->cannot('view', $list)) {
            abort(403);
        }
        return view("detail",["list"=>$list]);
    }
}
