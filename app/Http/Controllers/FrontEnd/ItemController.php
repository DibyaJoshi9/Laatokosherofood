<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use Illuminate\Routing\Controller as BaseController;

class ItemController extends BaseController
{
    public function GetCategoriesItems(){
        $categories = Category::with('childrenRecursive.ItemsRecursive','subCategories','subCategories.items')
                    ->where(['parent_id'=>null,'status'=>1])
                    ->get();
        return view('frontend.content.categoryProduct',compact('categories'));
    }
}
