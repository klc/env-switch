<?php

namespace KLC;


use Illuminate\Support\ServiceProvider;

class EnvSwitchProvider extends ServiceProvider
{
    public function register()
    {
        $envFiles = explode('|', env('ENV_FILES'));
        EnvSwitch::setEnvFiles($envFiles);

        $defaultEnv = env('DEFAULT_ENV');
        if (empty($defaultEnv)) {
            return;
        }

        EnvSwitch::set($defaultEnv);
    }
}