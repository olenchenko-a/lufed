<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fluidcontent".
 *
 * Auto generated 10-03-2020 12:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Fluid Content Engine',
  'description' => 'Fluid Content Element engine - integrates extremely compact and highly dynamic content element templates written in Fluid. See: https://github.com/FluidTYPO3/fluidcontent',
  'category' => 'misc',
  'author' => 'FluidTYPO3 Team',
  'author_email' => 'claus@namelesscoder.net',
  'author_company' => '',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '5.2.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.1.99',
      'typo3' => '7.6.0-8.7.99',
      'flux' => '7.3.0-8.99.99',
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
      'FluidTYPO3\\Fluidcontent\\' => 'Classes/',
    ),
  ),
  'autoload-dev' => 
  array (
    'psr-4' => 
    array (
      'FluidTYPO3\\Fluidcontent\\Tests\\' => 'Tests/',
    ),
  ),
  'clearcacheonload' => false,
);

