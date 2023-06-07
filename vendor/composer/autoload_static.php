<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11b978e8713049378c0c4e8869faac52
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'r' => 
        array (
            'router\\' => 7,
            'repository\\' => 11,
        ),
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'controllers\\' => 12,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Router',
        ),
        'repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Repository',
        ),
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11b978e8713049378c0c4e8869faac52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11b978e8713049378c0c4e8869faac52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11b978e8713049378c0c4e8869faac52::$classMap;

        }, null, ClassLoader::class);
    }
}
