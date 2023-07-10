<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c1dab174ed0fab1f726e9e378299255
{
    public static $files = array (
        'd9a4d743103521829ed68690e4be49e6' => __DIR__ . '/../..' . '/const.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c1dab174ed0fab1f726e9e378299255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c1dab174ed0fab1f726e9e378299255::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c1dab174ed0fab1f726e9e378299255::$classMap;

        }, null, ClassLoader::class);
    }
}
