<?php namespace RomainMazB\AdminBar\Components;

use Backend\Facades\BackendAuth;
use RomainMazB\AdminBar\Classes\Singleton;
use Event;
use RomainMazB\AdminBar\Models\Settings;

class AdminBar extends \Cms\Classes\ComponentBase
{
    public $loggedIn = false;

    public $items = [];

    public $display_dashboard_link;

    public function init()
    {
        if (! BackendAuth::check()) {
            return;
        }

        $this->loggedIn = true;
        $this->addCss('/plugins/romainmazb/adminbar/assets/css/style.css');

        Event::fire('romainmazb.adminbar.init', [&$this, &$this->items]);
        $this->display_dashboard_link = Settings::get('display_dashboard_link', true);
    }

    public function componentDetails()
    {
        return [
            'name' => 'Admin Bar',
            'description' => 'Displays a admin-only navigation bar on front-end',
        ];
    }

    public function addItems($items)
    {
        $this->items = array_merge($this->items, $items);
    }
}
