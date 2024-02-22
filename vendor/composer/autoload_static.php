<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecce313b0959aacf5b069b177d8c3a4f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\SimplePhpCrud\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\SimplePhpCrud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitecce313b0959aacf5b069b177d8c3a4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitecce313b0959aacf5b069b177d8c3a4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitecce313b0959aacf5b069b177d8c3a4f::$classMap;

        }, null, ClassLoader::class);
    }
}
