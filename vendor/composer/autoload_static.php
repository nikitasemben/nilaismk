<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58046073e7dad6c3eb0bf9212ff7f25f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lenovo\\Skripsinilai\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lenovo\\Skripsinilai\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit58046073e7dad6c3eb0bf9212ff7f25f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58046073e7dad6c3eb0bf9212ff7f25f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58046073e7dad6c3eb0bf9212ff7f25f::$classMap;

        }, null, ClassLoader::class);
    }
}