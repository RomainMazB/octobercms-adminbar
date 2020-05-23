<?php

namespace RomainMazB\AdminBar;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'RomainMazB\AdminBar\Components\AdminBar' => 'adminBar'
        ];
    }
}
