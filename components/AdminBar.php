<?php namespace RomainMazB\AdminBar\Components;

use Backend\Facades\BackendAuth;
use Event;
use Backend;

class AdminBar extends \Cms\Classes\ComponentBase
{
    public $loggedIn = false;

    public $items = [];

    public $display_dashboard_link;

    public $auth;

    public $backend_uri;

    public function init()
    {
        if (! BackendAuth::check()) {
            return;
        }

        $user = BackendAuth::getUser();
        $this->auth = [
            'full_name' => $user->full_name,
            'thumb' => $user->getAvatarThumb()
        ];

        $this->backend_uri = Backend::url('/');
        $this->addCss('/plugins/romainmazb/adminbar/assets/css/style.css');

        Event::fire('romainmazb.adminbar.init', [&$this, &$this->items]);
    }

    public function componentDetails()
    {
        return [
            'name' => trans('romainmazb.adminbar::lang.plugin.name'),
            'description' => trans('romainmazb.adminbar::lang.plugin.description'),
        ];
    }

    public function defineProperties()
    {
        return [
            'display_dashboard_link' => [
                'title'             => trans('romainmazb.adminbar::lang.properties.titles.display_dashboard_link'),
                'description'       => trans('romainmazb.adminbar::lang.properties.descriptions.display_dashboard_link'),
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'display_auth_links' => [
                'title'             => trans('romainmazb.adminbar::lang.properties.titles.display_auth_links'),
                'description'       => trans('romainmazb.adminbar::lang.properties.descriptions.display_auth_links'),
                'default'           => true,
                'type'              => 'checkbox'
            ],
        ];
    }

    public function addItems($items)
    {
        $this->items = array_merge($this->items, $items);
    }
}
