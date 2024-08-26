<?php

use T3SBS\T3sbootstrap\Controller\ConfigController;

/**
 * Definitions for modules provided by EXT:t3sbootstrap
 */
return [
    'web_T3sbootstrap' => [
        'parent' => 'web',
        'position' => ['after' => 'web_list'],
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/web/T3sbootstrap',
        'labels' => 'LLL:EXT:cmi5/Resources/Private/Language/locallang_m1.xlf',
        'extensionName' => 'T3sbootstrap',
        'iconIdentifier' => 'bootstraplogo',
        'controllerActions' => [
            ConfigController::class => [
                'list',
                'new',
                'create',
                'edit',
                'update',
                'delete',
                'dashboard',
                'constants',
            ],
        ],
    ],
];
