<?php

use VendorName\ProjectName\ExampleController;

return [
    'app.routes' => [

        # Home page
        'home' => [
            'pattern' => '/',
            'handler' => [ExampleController::class, 'home'],
        ],

    ],
];
