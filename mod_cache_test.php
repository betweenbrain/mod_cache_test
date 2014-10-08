<?php defined('_JEXEC') or die;

/**
 * File       cache_test.php
 * Created    10/8/14 9:19 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

/**
 * Cacheparams object for internally set caching mechanism.
 *
 * Options for cachemode:
 * - Safeuri: Id is created from URL params array, the same as in component view cache. Use this mode if your module depends on url parameters other than Itemid to display content (e.g. module that displays different image for each content category). Modeparams property is an array of url parameters and their filter types.
 * - Id: module sets own cache id's according to it's own formula. Most flexible, but often not needed. Modeparams property is calculated id.
 */
$cacheparams               = new stdClass;
$cacheparams->cachemode    = 'safeuri';
$cacheparams->class        = 'ModCacheTestHelper';
$cacheparams->method       = 'getData';
$cacheparams->methodparams = $params;
$cacheparams->modeparams   = array('id' => 'int', 'Itemid' => 'int');

$data = JModuleHelper::moduleCache($module, $params, $cacheparams);

if (!count($data))
{
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_cache_test', 'default');