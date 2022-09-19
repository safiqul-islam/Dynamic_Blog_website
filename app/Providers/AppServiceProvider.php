<?php

namespace App\Providers;

use App\Models\BlogCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        View::share('blogCategories',BlogCategory::where('status',1)->select('id','name')->get());

//        View::composer('front.includes.header', function ($view){
//            $view->with('blogCategories',BlogCategory::where('status',1)->select('id','name')->get());
//        });
    }
}
