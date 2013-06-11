<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Overrides
 *
 * @copyright   Copyright (C) 2012 Don Gilbert. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
define('OVERRIDES', dirname(__FILE__).'/overrides');
 
// Use JLoader to register all the classes you want to override
JLoader::register('JDocumentRendererRSS', OVERRIDES.'/libraries/joomla/document/feed/renderer/rss.php', true);
JLoader::register('JDocumentRendererAtom', OVERRIDES.'/libraries/joomla/document/feed/renderer/atom.php', true);