<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb885629bed9afa857e7e43dec30b94cd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb885629bed9afa857e7e43dec30b94cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb885629bed9afa857e7e43dec30b94cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb885629bed9afa857e7e43dec30b94cd::$classMap;

        }, null, ClassLoader::class);
    }
}