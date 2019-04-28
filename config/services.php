<?php

use function DI\add;
use Species\App\TwigExtension\CsrfTwigExtension;
use Species\App\TwigExtension\ReflectionTwigExtension;
use Species\App\TwigExtension\RouterTwigExtension;

return [

    # Twig extensions.
    'settings.twig.extensions' => add([
        CsrfTwigExtension::class,
        ReflectionTwigExtension::class,
        RouterTwigExtension::class,
    ]),

];
