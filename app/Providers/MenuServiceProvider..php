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
        $menu1 = $this->app['laravolt.menu']->add('Aplikasi');
        $menu1->add('Dashboard', 'admin')
             ->data('icon', 'chart area icon')
            ->active('admin');

        $subMenu = $menu1->add('Pengaturan Aplikasi')
            ->data('icon', 'cog');

        $subMenu->add('Gambar Utama', 'admin/setting/background')
           ->data('icon', 'cog')
           ->active('admin/setting/*');

        $menu = $this->app['laravolt.menu']->add('Data');
        $menu->add('Master Data', 'admin/master')
            ->data('icon', 'archive')
            ->active('admin/master/*');

        $menu->add('Artikel', 'admin/article')
             ->data('icon', 'file alternate outline')
            ->active('admin/article/*');

        $menu->add('Paket Wisata', 'admin/wisatum')
            ->data('icon', 'coffee icon')
            ->active('admin/wisatum/*');
            
        $menu->add('Kritik / Saran', 'admin/pesan')
            ->data('icon', 'envelope outline icon')
            ->active('admin/pesan/*');
        

    }
}
