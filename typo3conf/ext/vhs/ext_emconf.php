<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "vhs".
 *
 * Auto generated 10-03-2020 11:37
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'VHS: Fluid ViewHelpers',
  'description' => 'A collection of ViewHelpers to perform rendering tasks which are not natively supported by Fluid - for example: advanced formatters, math calculators, specialized conditions and Iterator/Array calculators and processors',
  'category' => 'misc',
  'author' => 'FluidTYPO3 Team',
  'author_email' => 'claus@namelesscoder.net',
  'author_company' => '',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '6.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.4.99',
      'typo3' => '8.7.0-10.2.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => '',
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'FluidTYPO3\\Vhs\\' => 'Classes/',
    ),
  ),
  'autoload-dev' => 
  array (
    'psr-4' => 
    array (
      'FluidTYPO3\\Vhs\\Tests\\' => 'Tests/',
    ),
  ),
  'clearcacheonload' => true,
);

