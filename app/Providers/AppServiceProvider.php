<?php

namespace App\Providers;

use App\Models\Comment;
use App\Observers\CommentObserver;
use App\User;
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
        View::composer('post.index', function ($view) {
           $view->with('users', User::orderBy('id', 'DESC')->get());
        });

//        Comment::observe(CommentObserver::class);
    }
}
