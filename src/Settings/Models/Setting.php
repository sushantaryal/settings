<?php

namespace Taggers\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value',
    ];

	protected $casts = [
		'value' => 'json'
	];

	/**********************/
	/* Additional Methods */
	/**********************/
	/**
     * Create and persist a new setting.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function set(array $attributes)
    {
		$this->value = $this->value ?: [];
		$settings = array_merge($this->value, $attributes);
        $this->persist($settings);
    }

	/**
     * Merge the given attributes with the current settings.
     * But do not assign any new settings.
     *
     * @param  array  $attributes
     * @return mixed
     */
	public function merge(array $attributes)
	{
		$this->value = $this->value ?: [];
		$settings = array_merge(
            $this->value,
            array_only($attributes, array_keys($this->value))
        );
        return $this->persist($settings);
	}

	/**
     * Persist the settings.
     *
     * @return mixed
     */
    protected function persist($settings)
    {
        return $this->update(['value' => $settings]);
    }
}
