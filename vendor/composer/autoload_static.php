<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15163c3fc63a6a3c923e6291ef6d1c60
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15163c3fc63a6a3c923e6291ef6d1c60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15163c3fc63a6a3c923e6291ef6d1c60::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit15163c3fc63a6a3c923e6291ef6d1c60::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
