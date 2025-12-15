<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Chia sẻ categories cho toàn bộ view client
        View::composer('*', function ($view) {
            $view->with('categories', Category::where('status', 1)->get());
        });
    }

    public function register(): void
    {
        //
    }
}
