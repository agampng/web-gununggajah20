<?php

return [
    'brand_name'     => env('APP_NAME', 'Laravolt'),
    'brand_image' => 'img/klaten-logo.png',
    'sidebar_theme'  => 'light',
    'quick_switcher' => false,
    'options'        => [],
    'themes'         => [
        'dark-blue' => [
            'topbar_inverted' => true,
        ],
        'teal'      => [
            // 'topbar_inverted'   => true,
        ],
    ],
    'flash'          => [
        'attributes' => [
            'display_time' => 5000,
            'opacity' => 0.9,
            'position' => 'top center',
        ],
        'except' => [],
    ],
];
