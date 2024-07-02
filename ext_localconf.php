<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {
        $icons = [
            'ce-timeline-icon' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline.svg',
            'ce-timeline-record-icon' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline-record.svg',
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $path]
            );
        }

    }
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_timeline/Configuration/TypoScript/TsConfig/page.typoscript">
');
