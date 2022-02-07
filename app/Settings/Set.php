<?php

namespace App\Settings;



use Illuminate\Support\Collection;

class Set
{
    private Collection $settings;

    public function __construct(Collection $settings)
    {
        $this->settings = $settings;
    }

    public function getSettings()
    {
        return $this->settings;
    }

    public function getSetting(string $setting)
    {
        return $this->settings->get($setting);
    }
}
