<?php
if (!function_exists('envSwitch')) {
    function envSwitch($name) {
        \KLC\EnvSwitch::set($name);
    }
}