<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit929fb365b9981d29459d58f676689cf7
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\helper\\' => 13,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'm' => 
        array (
            'mindplay\\annotations\\' => 21,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-image/src',
        ),
        'mindplay\\annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/mindplay/annotations/src/annotations',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit929fb365b9981d29459d58f676689cf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit929fb365b9981d29459d58f676689cf7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit929fb365b9981d29459d58f676689cf7::$classMap;

        }, null, ClassLoader::class);
    }
}
