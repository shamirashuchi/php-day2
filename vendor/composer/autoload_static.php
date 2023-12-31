<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89a040fe72beab5df76da7757abd09eb
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89a040fe72beab5df76da7757abd09eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89a040fe72beab5df76da7757abd09eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89a040fe72beab5df76da7757abd09eb::$classMap;

        }, null, ClassLoader::class);
    }
}
