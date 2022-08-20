<?php

namespace Xeroctation\Random\Providers;
use Illuminate\Support\ServiceProvider;

class RandomServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/random.php' => config_path('random.php'),
        ]);
    }

    public function register()
    {

    }
}
