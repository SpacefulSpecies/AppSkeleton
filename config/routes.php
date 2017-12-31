<?php

use VendorName\ProjectName\ExampleController;

return [

    /**
     * Middleware ... not PSR-15 but with the "($request, $response, $next): $response" signature.
     */
    'app.middleware' => [],

    /**
     * Routes.
     */
    'app.routes' => [

        # Home page
        'home' => [
            'pattern' => '/',
            'handler' => [ExampleController::class, 'home'],
        ],

    ],

];
