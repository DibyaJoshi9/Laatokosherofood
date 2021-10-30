<?php


namespace App\Providers;





use App\Http\ViewComposers\Front\MenuPageViewComposer;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
       

        View::composer('frontend/layout/menu',MenuPageViewComposer::class);
      
    }
}