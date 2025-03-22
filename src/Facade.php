<?php

namespace Alqabali\Settings;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'Alqabali\Settings\Setting\SettingStorage';
    }
}
