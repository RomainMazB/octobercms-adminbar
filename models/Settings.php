<?php namespace RomainMazB\AdminBar\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'romainmazb_adminbar_settings';

    public $settingsFields = 'fields.yaml';

    protected $cache = [];
}
