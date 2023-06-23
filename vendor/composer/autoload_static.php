<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita08dcc1704890c012eaac7ffe776d012
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scripts',
            1 => __DIR__ . '/../..' . '/scripts/db',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita08dcc1704890c012eaac7ffe776d012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita08dcc1704890c012eaac7ffe776d012::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita08dcc1704890c012eaac7ffe776d012::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita08dcc1704890c012eaac7ffe776d012::$classMap;

        }, null, ClassLoader::class);
    }
}
