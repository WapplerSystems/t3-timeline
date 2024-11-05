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
    'version' => '13.0.0',
    'constraints' =>
    [
        'depends' => [
            'typo3' => '13.4.0-13.4.99'
        ],
    ]
];
