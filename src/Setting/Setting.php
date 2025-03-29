<?php

namespace Alqabali\Settings\Setting;

use Alqabali\Settings\Casts\JsonOrStringCast;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = ['updated_at', 'id'];


    protected $table = 'settings';

    public function scopeGroup($query, $groupName)
    {
        return $query->whereGroup($groupName);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    protected function casts(): array
    {
        return [
            'val' => JsonOrStringCast::class,
        ];
    }
}
