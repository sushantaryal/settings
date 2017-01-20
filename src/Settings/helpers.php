<?php

if (! function_exists('settings')) {
    function settings($key = null, $inner = null)
    {
        $settings = app('settings');
        if($key) {
            $value = $settings->get($key);
            if($inner) {
                return collect($value)->get($inner);
            }
            return $value;
        }
        return $settings;
    }
}