<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index(){
        $categories = Category::where(['status'=>1,'parent_id'=>null])->with('childrenRecursive')->get();
        return view('FrontEnd.home',compact('categories'));
    }
}
