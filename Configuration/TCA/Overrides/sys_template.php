<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript',
   'Timeline - Content Element'
);

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript/Styles/Default',
   'Timeline - Style: Default'
);

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript/Styles/Darkmode',
   'Timeline - Style: Darkmode'
);

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript/Styles/Lightmode',
   'Timeline - Style: Lightmode'
);

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript/Styles/Pink',
   'Timeline - Style: Pink Borders'
);

ExtensionManagementUtility::addStaticFile(
   'ce_timeline',
   'Configuration/TypoScript/Lightbox',
   'Timeline - JavaScript: Lightbox'
);
