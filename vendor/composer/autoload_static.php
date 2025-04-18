<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite35c3f20853af295e6a68df58f5a1fb4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pdp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pdp\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremykendall/php-domain-parser/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite35c3f20853af295e6a68df58f5a1fb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite35c3f20853af295e6a68df58f5a1fb4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite35c3f20853af295e6a68df58f5a1fb4::$classMap;

        }, null, ClassLoader::class);
    }
}
