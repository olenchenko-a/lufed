<?php

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function($_EXTKEY){

    ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Lufed IT Template');

    // $pageTsConfig = GeneralUtility::getUrl(ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TsConfig/Page/config.ts');

    ExtensionManagementUtility::addPageTSConfig($pageTsConfig);
    
}, $_EXTKEY);
