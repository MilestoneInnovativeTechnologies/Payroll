<?php

namespace Milestone\Payroll;

use Illuminate\Support\ServiceProvider;

class PayrollServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(implode([__DIR__,'Migration'],DIRECTORY_SEPARATOR));
        //$this->mergeConfigFrom(implode([__DIR__,'..','config','filesystems','disks.php'],DIRECTORY_SEPARATOR),'filesystems.disks');
    }
}
