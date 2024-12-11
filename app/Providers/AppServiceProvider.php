<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $loader = AliasLoader::getInstance();

        // Add your aliases
        $loader->alias('Cart', \Darryldecode\Cart\Facades\CartFacade::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Регистрируем компоненты Livewire
        $this->registerLivewireComponents();
    }

    protected function registerLivewireComponents(): void
    {
        Livewire::component('general.header-auth', \App\Livewire\General\HeaderAuth::class);
        Livewire::component('general.user', \App\Livewire\General\User::class);
        Livewire::component('general.wallet', \App\Livewire\General\Wallet::class);
    }
}
