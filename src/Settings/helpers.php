<?php

if (!function_exists('settings')) {
	function settings($key = null, $inner = null)
	{
		$settings = app('settings');
		if ($key) {
	        $data  = explode('.', $key);
	        $value = $settings->get($data[0]);
	        if (count($data) == 1) {
	            return $value;
	        }
	        $inner = implode('.', array_except($data, 0));
	        return array_get(collect($value), $inner, '');
	    }
		return $settings;
	}
}