<?php

use function DI\add;
use Slim\HttpCache\Cache as HttpCacheMiddleWare;
use Species\App\Middleware\{AddRouteNameToTwigMiddleware, CsrfValidationMiddleware, TwigDebugMiddleware};
use VendorName\ProjectName\ExampleController;

return [
    'settings.routes' => add([

        # Example
        'example' => [
            'middleware' => [
                TwigDebugMiddleware::class,
                HttpCacheMiddleWare::class,
                AddRouteNameToTwigMiddleware::class,
            ],
            'group' => [

                # Home
                'home' => [
                    'pattern' => '/',
                    'methods' => ['GET', 'POST'],
                    'middleware' => [CsrfValidationMiddleware::class],
                    'handler' => ExampleController::class,
                ],

            ],
        ],

    ]),
];
