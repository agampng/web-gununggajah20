<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Assets;
use Laravolt\Cms\Models\Post;
use SemanticForm;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        SemanticForm::macro(
            'redactor',
            function ($name, $defaultValue = null) {
                Assets::add('redactor');

                return SemanticForm::textarea($name, $defaultValue)->addClass('redactor');
            }
        );

        SemanticForm::macro('imageEditor', function ($name, $label = null, $data = []) {
            Assets::add('fileuploader');
            $model = $this->model;

            return view(
                'components.field.image-editor',
                compact('model', 'name', 'label', 'data')
            )->render();
        });

//        SemanticForm::macro('imageEditorIcon', function ($name, $label = null, $data = []) {
//            Assets::add('fileuploader');
//            $model = $this->model;
//
//            return view(
//                'components.field.image-editor-icon',
//                compact('model', 'name', 'label', 'data')
//            )->render();
//        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
