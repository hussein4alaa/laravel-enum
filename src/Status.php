<?php

namespace g4t\Enum;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Status implements Castable
{
    public static function castUsing(array $arguments)
    {
        return new class implements CastsAttributes
        {
            public function get($model, $key, $value, $attributes)
            {
                $options = config('enum');
                return array_key_exists($value, $options) ? $options[$value] : null;
            }

            public function set($model, $key, $value, $attributes)
            {
                $options = config('enum');
                foreach ($options as $option_key => $option_value) {
                    return $value == $option_value ? $option_key : null;
                }
            }
        };
    }
}
