<?php


namespace App\Http\ViewComposers\Front;

use App\Http\Daos\CategoryDao;
use Illuminate\View\View;

class HomePageViewComposer
{

    public function __construct(CategoryDao $categoryDao)
    {
     $this->categoryDao = $categoryDao;



    }

    public function compose(View $view)
    {
      $view->with('categories',$this->categoryDao->getActiveCategory());
     
     }

}
