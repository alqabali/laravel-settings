<?php

namespace Alqabali\Settings\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class JsonOrStringCast implements CastsAttributes
{
    public function get($model, string $key, mixed $value, array $attributes): mixed
    {
        $decoded = json_decode($value, true);

        return json_last_error() === JSON_ERROR_NONE ? $decoded : $value;
    }

    public function set($model, string $key, mixed $value, array $attributes): mixed
    {
        return is_array($value) ? json_encode($value) : $value;
    }
}
