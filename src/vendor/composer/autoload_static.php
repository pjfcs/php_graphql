<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5bb0224e33b1564a0071c67f428c504
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
        'A' => 
        array (
            'App\\GraphQL\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
        'App\\GraphQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5bb0224e33b1564a0071c67f428c504::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5bb0224e33b1564a0071c67f428c504::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5bb0224e33b1564a0071c67f428c504::$classMap;

        }, null, ClassLoader::class);
    }
}
