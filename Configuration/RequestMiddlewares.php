<?php

use Subugoe\Find\Ajax\GetEntity;
use Subugoe\Find\Ajax\Autocomplete;
return [
    'frontend' => [
        'Subugoe/Find/ajax/getentity' => [
            'target' => GetEntity::class,
            'after' => [
                'typo3/cms-frontend/prepare-tsfe-rendering',
            ],
        ],
        'Subugoe/Find/ajax/autocomplete' => [
            'target' => Autocomplete::class,
            'after' => [
                'typo3/cms-frontend/prepare-tsfe-rendering',
            ],
        ],
    ],
];
