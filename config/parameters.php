<?php

use function DI\add;

return [

    # Twig globals
    'settings.twig.globals' => add([
        'assetVersion' => '1',
    ]),

];
