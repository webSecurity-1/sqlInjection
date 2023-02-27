<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8751d65c2a8ea82f88e3e52c0ad518e7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SqlInjection\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SqlInjection\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8751d65c2a8ea82f88e3e52c0ad518e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8751d65c2a8ea82f88e3e52c0ad518e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8751d65c2a8ea82f88e3e52c0ad518e7::$classMap;

        }, null, ClassLoader::class);
    }
}