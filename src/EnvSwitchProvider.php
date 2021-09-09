<?php

namespace KLC;


use Illuminate\Support\ServiceProvider;

class EnvSwitchProvider extends ServiceProvider
{
    public function register()
    {
        $defaultEnv = env('DEFAULT_ENV');
        if (empty($defaultEnv)) {
            return;
        }

        EnvSwitch::set($defaultEnv);
    }
}