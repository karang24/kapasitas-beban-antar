<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0301bdfa6e2b8731893a8d20edf1b03
{
    public static $prefixesPsr0 = array (
        'f' => 
        array (
            'fpdf' => 
            array (
                0 => __DIR__ . '/..' . '/itbz/fpdf/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc0301bdfa6e2b8731893a8d20edf1b03::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
