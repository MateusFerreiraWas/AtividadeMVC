<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit911df15d184a520681e63606602a9869
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit911df15d184a520681e63606602a9869::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit911df15d184a520681e63606602a9869::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
