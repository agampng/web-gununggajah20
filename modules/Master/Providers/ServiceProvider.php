<?php

namespace Modules\Master\Providers;

use Illuminate\Database\Eloquent\Factory;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootMenu();
        $this->bootTranslations();
        $this->bootConfig();
        $this->bootViews();
        $this->bootFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Boot menu.
     *
     * @return void
     */
    protected function bootMenu()
    {
//        if ($this->app->bound('laravolt.menu') && ! $this->app->runningInConsole()) {
//            $parent = app('laravolt.menu');
//
//            $parent
//                ->add('Artikel', route('Master.index'))
//                ->data('icon', 'circle outline')
//                ->active('Master/*');
//        }
//        if ($this->app->bound('laravolt.menu')) {
//            $parent = app('laravolt.menu');
//
//            $parent->add('Case Category', route('Master.index'))
//                ->data('icon', 'circle outline')
//                ->active('caseCategory/*');
//        }
    }

    /**
     * Boot config.
     *
     * @return void
     */
    protected function bootConfig()
    {
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('master.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php',
            'master'
        );
    }

    /**
     * Boot views.
     *
     * @return void
     */
    public function bootViews()
    {
        $viewPath = resource_path('views/modules/master');

        $sourcePath = __DIR__ . '/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/master';
        }, \Config::get('view.paths')), [$sourcePath]), 'master');
    }

    /**
     * Boot translations.
     *
     * @return void
     */
    public function bootTranslations()
    {
        $langPath = resource_path('lang/modules/master');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'master');
        } else {
            $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'master');
        }
    }

    /**
     * Boot an additional directory of factories.
     *
     * @return void
     */
    public function bootFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
