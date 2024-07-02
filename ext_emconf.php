<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Timeline Content Element',
    'description' => 'Fork of simonkoehler/ce-timeline. Enables a new content element of type "Timeline" for displaying histories of companies and more...',
    'category' => 'fe',
    'author' => 'Sven Wappler',
    'author_email' => 'typo3@wappler.systems',
    'author_company' => 'WapplerSystems',
    'state' => 'stable',
    'uploadfolder' => '0',
    'clearCacheOnLoad' => 0,
    'version' => '12.0.0',
    'constraints' =>
    [
        'depends' => [
            'typo3' => '12.4.0-12.4.99'
        ],
    ]
];
