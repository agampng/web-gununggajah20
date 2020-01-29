<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
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
        if ($this->app->bound('laravolt.menu')) {
            $this->contentAdmin();
        }
    }

    public function contentAdmin()
    {
        $menu = $this->app['laravolt.menu']->add('Data');
        $menu->add('Artikel', 'admin/article')
             ->data('icon', 'file alternate outline')
            ->active('admin/article/*');

        $menu->add('Paket Wisata', 'admin/wisatum')
            ->data('icon', 'archive')
            ->active('admin/wisatum/*');
    }
}
