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

$helper          = new ModCacheTestHelper;
$data            = $helper->getData();
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_cache_test', 'default');