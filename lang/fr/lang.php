<?php return [
    'plugin' => [
        'name' => 'Admin Bar',
        'description' => "Cré une barre d'administration à laquelle les autres plugins peuvent ajouter des liens"
    ],
    'properties' => [
        'titles' => [
            'display_dashboard_link' => 'Afficher le lien Administration',
            'display_auth_links' => 'Afficher le menu d\'utilisateur'
        ],
        'descriptions' => [
            'display_dashboard_link' => 'Ajoute un lien vers l\'administration avant tous les autres',
            'display_auth_links' => 'Ajoutes les liens du compte administrateur sur la droite: Compte, préférences et déconnexion'
        ]
    ]
];
