<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79a1b9768e0c3684e7b9232b49a5581e
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'testTask\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'testTask\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79a1b9768e0c3684e7b9232b49a5581e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79a1b9768e0c3684e7b9232b49a5581e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79a1b9768e0c3684e7b9232b49a5581e::$classMap;

        }, null, ClassLoader::class);
    }
}