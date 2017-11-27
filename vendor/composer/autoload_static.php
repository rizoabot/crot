<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8e516ebf9c447f88ff905907c9803dd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8e516ebf9c447f88ff905907c9803dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8e516ebf9c447f88ff905907c9803dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
