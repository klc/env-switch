<?php

namespace KLC;

use Dotenv\Dotenv;
use Illuminate\Support\Facades\App;

class EnvSwitch
{
    /** @var string $name */
    public static function set($name)
    {
        Dotenv::createMutable(App::environmentPath(), $name)->load();
    }
}