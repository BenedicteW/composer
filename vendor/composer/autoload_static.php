<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf87beafa4da4d49574f444d0e3071914
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'HelloWorld\\SayHello' => __DIR__ . '/..' . '/ehime/hello-world/src/HelloWorld/SayHello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf87beafa4da4d49574f444d0e3071914::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf87beafa4da4d49574f444d0e3071914::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf87beafa4da4d49574f444d0e3071914::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf87beafa4da4d49574f444d0e3071914::$classMap;

        }, null, ClassLoader::class);
    }
}
