<?php

namespace KLC;

use Illuminate\Support\Facades\App;

class EnvSwitch
{
    /** @var string $name */
    public static function set($name)
    {
        if (method_exists(\Dotenv\Dotenv::class, 'createMutable')){
            \Dotenv\Dotenv::createMutable(App::environmentPath(), $name)->load();
        } elseif (method_exists(\Dotenv::class, 'makeMutable')) {
            \Dotenv::makeMutable();
            \Dotenv::load(App::environmentPath(), $name);
        }
    }
}