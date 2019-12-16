<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit180276e91e6b6df32875c375687cba9f
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit180276e91e6b6df32875c375687cba9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit180276e91e6b6df32875c375687cba9f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
