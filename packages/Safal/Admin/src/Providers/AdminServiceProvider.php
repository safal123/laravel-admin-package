<?php


namespace Safal\Admin\Providers;


use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../web/routes.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'admin');
    }
}
