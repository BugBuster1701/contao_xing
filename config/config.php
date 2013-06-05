<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2013 Leo Feyer
 *
 * @copyright  Glen Langer 2008..2013 <http://www.contao.glen-langer.de>
 * @author     Glen Langer (BugBuster)
 * @package    Xing
 * @license    LGPL
 * @filesource
 * @see	       https://github.com/BugBuster1701/gl_xing
 */


/**
 * Add back end modules
 */
$GLOBALS['BE_MOD']['content']['gl_xing'] = array
(
	'tables' => array('tl_xing_category', 'tl_xing'),
	'icon'   => 'system/modules/gl_xing/assets/icon.gif'
);


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'xing' => array
	(
		'xinglist'   => 'Xing\ModuleXingList'
	)
));

