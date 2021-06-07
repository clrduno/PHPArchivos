<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0ebe3eb42126e923309d5c7b68b1214
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpOffice\\PhpPresentation\\' => 26,
            'PhpOffice\\Common\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpOffice\\PhpPresentation\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phppresentation/src/PhpPresentation',
        ),
        'PhpOffice\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/common/src/Common',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PclZip' => __DIR__ . '/..' . '/pclzip/pclzip/pclzip.lib.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0ebe3eb42126e923309d5c7b68b1214::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0ebe3eb42126e923309d5c7b68b1214::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0ebe3eb42126e923309d5c7b68b1214::$classMap;

        }, null, ClassLoader::class);
    }
}
