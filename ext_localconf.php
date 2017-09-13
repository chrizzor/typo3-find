<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Subugoe.' . $_EXTKEY,
    'Find',
    [
        'Search' => 'index, detail, suggest',
    ],
    [
        'Search' => 'index, detail, suggest',
    ]
);

if (TYPO3_MODE === 'BE') {
    /*
     * Register icons
     */
    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ext-find-ce-wizard',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        ['name' => 'search']
    );
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:find/Configuration/TSconfig/ContentElementWizard.tsconfig">');

// RealURL autoconfiguration
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['find'] = 'EXT:find/Classes/Hooks/RealUrl.php:Subugoe\\Find\\Hooks\\RealUrl->addRealUrlConfiguration';


