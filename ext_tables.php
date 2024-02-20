<?php

defined('TYPO3') or die;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(function() {
    $path = implode(
        '',
        [
            'phar://',
            ExtensionManagementUtility::extPath('ods_osm_dependencies'),
            '/Resources/Private/Php/vendor.phar/vendor/autoload.php'
        ]
    );
    @include $path;
})();
