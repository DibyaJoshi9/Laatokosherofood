<?php


namespace App\Providers;

use App\Http\ViewComposers\Front\HomePageViewComposer;
use App\Http\ViewComposers\Front\LogoPageViewComposer;
use App\Http\ViewComposers\Front\MenuPageViewComposer;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
       

        View::composer('frontend/layout/menu',MenuPageViewComposer::class);
        View::composer('frontend/home',HomePageViewComposer::class);
        View::composer('frontend/layout/logo',LogoPageViewComposer::class);
      
    }
}