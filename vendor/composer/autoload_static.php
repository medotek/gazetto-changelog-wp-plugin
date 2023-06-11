<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b41e43af862fb0e9a708f9f2e35072e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medo\\GChangelog\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medo\\GChangelog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b41e43af862fb0e9a708f9f2e35072e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b41e43af862fb0e9a708f9f2e35072e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b41e43af862fb0e9a708f9f2e35072e::$classMap;

        }, null, ClassLoader::class);
    }
}