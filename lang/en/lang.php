<?php return [
    'plugin' => [
        'name' => 'Admin Bar',
        'description' => 'Create a frontend admin bar where other plugin can add links.'
    ],
    'properties' => [
        'titles' => [
            'display_dashboard_link' => 'Display dashboard link',
            'display_auth_links' => 'Display auth links'
        ],
        'descriptions' => [
            'display_dashboard_link' => 'Add a dashboard link before all other links',
            'display_auth_links' => 'Add backend auth links on the right: Account, preferences and signout'
        ]
    ]
];
