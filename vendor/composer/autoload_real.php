<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitecce313b0959aacf5b069b177d8c3a4f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitecce313b0959aacf5b069b177d8c3a4f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitecce313b0959aacf5b069b177d8c3a4f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitecce313b0959aacf5b069b177d8c3a4f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}