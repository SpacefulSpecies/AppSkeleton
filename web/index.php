<?php

use Dotenv\Dotenv;
use Species\App;

(function () {

    # Throw all error levels, including warnings, notices, ...
    set_error_handler(function ($severity, $message, $file, $line) {
        throw new \ErrorException($message, 0, $severity, $file, $line);
    }, E_ALL);

    # Project root path
    $rootPath = dirname(__DIR__);

    # Autoloader
    include $rootPath . '/vendor/autoload.php';

    # DotEnv overload
    $dotEnv = Dotenv::create($rootPath);
    $dotEnv->overload();
    $dotEnv->required(App\StandardEnvironment::ENV_KEY_NAME)->notEmpty();
    $dotEnv->required(App\StandardEnvironment::ENV_KEY_DEBUG)->isBoolean();
    $dotEnv->required(App\StandardEnvironment::ENV_KEY_CACHE)->isBoolean();

    # Run app with default environment and path structure from php env
    App::withRootPath($rootPath)->run();

})();
