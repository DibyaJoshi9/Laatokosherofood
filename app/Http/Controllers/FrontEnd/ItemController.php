<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;

class ItemController extends BaseController
{
    public function GetCategoriesItems(){
        $categories = Category::with('childrenRecursive.ItemsRecursive','subCategories','subCategories.items')
                    ->where(['parent_id'=>null,'status'=>1])
                    ->get();
        return view('frontend.content.categoryProduct',compact('categories'));
    }
    public function GetCategoriesItemsFromJs(){
        $categories = Category::with('childrenRecursive.ItemsRecursive','subCategories','subCategories.items')
                    ->where(['parent_id'=>null,'status'=>1])
                    ->get();
        return compact('categories');
    }
    public  function AddCartItems(Request $request)
    {
       dd($request);
    }
}
