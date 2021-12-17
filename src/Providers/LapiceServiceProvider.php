<?php

namespace Arispati\Lapice\Providers;

use Arispati\Lapice\Commands\RepositoryCommand;
use Arispati\Lapice\Commands\ServiceCommand;
use Illuminate\Support\ServiceProvider;

class LapiceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RepositoryCommand::class,
                ServiceCommand::class
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
