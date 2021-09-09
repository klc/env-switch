<?php

namespace KLC;

use Dotenv\Dotenv;
use Illuminate\Support\Facades\App;

class EnvSwitch
{
    /** @var array $envFiles */
    protected static $envFiles;

    /**
     * @param $fileNames
     */
    public static function setEnvFiles($fileNames)
    {
        self::$envFiles = $fileNames;
    }

    public static function set($name)
    {
        Dotenv::createMutable(sprintf('%s/%s.env', App::environmentPath(), $name));
    }
}