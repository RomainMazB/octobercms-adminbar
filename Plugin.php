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

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'romainmazb.adminbar::lang.settings.label',
                'description' => 'romainmazb.adminbar::lang.settings.description',
                'icon'        => 'icon-pencil-square-o',
                'class'       => 'RomainMazB\AdminBar\Models\Settings',
                'category'    => SettingsManager::CATEGORY_MISC
            ]
        ];
    }
}
