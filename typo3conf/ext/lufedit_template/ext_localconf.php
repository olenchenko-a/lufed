<?php

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

use FluidTYPO3\Flux\Core;

call_user_func(function($_EXTKEY){

    Core::registerProviderExtensionKey('Lufedit.LufeditTemplate', 'Content');  
    Core::registerProviderExtensionKey('Lufedit.LufeditTemplate', 'Page');

    // rte_image support
    // $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:lufedit_template/Configuration/RTE/Default.yaml';

}, $_EXTKEY);


