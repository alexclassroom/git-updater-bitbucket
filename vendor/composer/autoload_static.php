<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe4e5443566419180892616d97d19069
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fragen\\GitHub_Updater\\Bitbucket\\' => 32,
            'Fragen\\GitHub_Updater\\API\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fragen\\GitHub_Updater\\Bitbucket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fragen\\GitHub_Updater\\API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Bitbucket',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe4e5443566419180892616d97d19069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe4e5443566419180892616d97d19069::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe4e5443566419180892616d97d19069::$classMap;

        }, null, ClassLoader::class);
    }
}
