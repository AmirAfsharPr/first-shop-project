<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use App\Observers\CategoryObserver;
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
//        View::share('categories', Category::query()->where('category_id', null)->get());
//        View::share('brands', Brand::all());

//        view()->share('categories', Category::query()->where('category_id', null)->get());
//        view()->share('brands', Brand::all());

        view()->composer('client.*', function ($view){
            $view->with([
                'categories' => Category::query()->where('category_id', null)->get(),
                'brands' => Brand::all()
            ]);
        });

        Category::observe(CategoryObserver::class);
    }
}
