<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ac018105acf746b61c31956fe7286a8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ac018105acf746b61c31956fe7286a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ac018105acf746b61c31956fe7286a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ac018105acf746b61c31956fe7286a8::$classMap;

        }, null, ClassLoader::class);
    }
}
