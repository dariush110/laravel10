<?php

namespace Mlk\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProviders extends ServiceProvider
{
    public function register()
    {
      //  $this->app->register(EventServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'User');

        Route::middleware('web')->namespace('Mlk\User\Http\Controllers')->group(__DIR__ . '/../Routes/user_routes.php');
//        Gate::policy(User::class, UserPolicy::class);
//        Factory::guessFactoryNamesUsing(static function (string $name) {
//            return 'Mlk\User\Database\Factories\\' . class_basename($name) . 'Factory';
//        });
    }

    public function boot()
    {
        config()->set('panelConfig.menus.users', [
            'url'   => route('users.index'),
            'title' => 'کاربران',
            'icon'  => 'account',
        ]);
    }
}