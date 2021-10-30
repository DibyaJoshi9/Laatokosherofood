<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use Illuminate\Routing\Controller as BaseController;

class ItemController extends BaseController
{
    public function GetCategoriesItems(){
        $categories = (Category::with('childrenRecursive.ItemsRecursive')->where('parent_id',null)->get());
        return view('frontend.content.categoryProduct',compact('categories'));
    }
}
