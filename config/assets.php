<?php

/*
|---------------------------------------------------------------------------
| Here are SOME of the available configuration options with suitable values.
| Uncomment and customize those you want to override or remove them to
| use their default values. For a FULL list of options please visit
| https://github.com/Stolz/Assets/blob/master/API.md#assets
|---------------------------------------------------------------------------
*/

return [
    // Configuration for the default group. Feel free to add more groups.
    // Each group can have different settings.
    'default'  => [
        'css_dir'     => '',
        'js_dir'      => '',
        'collections' => [
            'redactor' => [
                'lib/redactor/redactor.js',
                'lib/redactor/redactor.css',
                'lib/redactor/plugins/alignment/alignment.js',
                'lib/redactor/plugins/alignment/alignment.css',
                'lib/redactor/plugins/fontcolor.js',
                'lib/redactor/plugins/source.js',
                'lib/redactor/plugins/table.js',
                'lib/redactor/plugins/video.js',
                'lib/redactor/app.js',
                'lib/redactor/app.css',
            ],
            'fileuploader' => [
                'lib/fileuploader/jquery.fileuploader.min.css',
                'lib/fileuploader/font/font-fileuploader.css',
                'lib/fileuploader/themes/jquery.fileuploader-theme-dropin.css',
                'lib/fileuploader/themes/jquery.fileuploader-theme-thumbnails.css',
                'lib/fileuploader/jquery.fileuploader.min.js',
            ],
            'slippry' => [
                'lib/slippry/slippry.css',
                'lib/slippry/custom.css',
                'lib/slippry/slippry.min.js',
            ],
        ],
        /**
         * Preload assets.
         * Here you may set which assets (CSS files, JavaScript files or collections)
         * should be loaded by default even if you don't explicitly add them on run time.
         *
         * @var array
         */
        //'autoload' => array('jquery-cdn'),
    ], // End of default group
    'laravolt' => [
        'css_dir'     => '',
        'js_dir'      => '',
        'collections' => [
            /**
             * http://vegas.jaysalvat.com/documentation/setup/
             * VEGAS is a jQuery plugin which adds beautiful animated background slideshows to your page body
             * or any of its elements. It works on IE9+, Safari, Firefox and Chrome.
             */
            'vegas' => [
                'laravolt/plugin/vegas/vegas.min.css',
                'laravolt/plugin/vegas/vegas.min.js',
            ],
        ],
    ],
];
