<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30f3493019432b1d9fdac19dbb04deb2
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'c7359326b6707d98bdc176bf9ddeaebf' => __DIR__ . '/..' . '/catfan/medoo/medoo.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
        'l' => 
        array (
            'logic\\' => 6,
        ),
        'c' => 
        array (
            'controller\\' => 11,
        ),
        'S' => 
        array (
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'logic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/logic',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/php-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30f3493019432b1d9fdac19dbb04deb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30f3493019432b1d9fdac19dbb04deb2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit30f3493019432b1d9fdac19dbb04deb2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
