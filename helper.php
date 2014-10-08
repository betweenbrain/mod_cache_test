<?php defined('_JEXEC') or die;

/**
 * File       helper.php
 * Created    10/8/14 9:20 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */
class ModCacheTestHelper
{

	/**
	 * Constructor
	 *
	 * @param JRegistry $params : module parameters
	 *
	 * @since 0.1
	 *
	 */
	public function __construct()
	{
		$this->db = JFactory::getDbo();
	}

	/**
	 * Gets the data
	 *
	 * @return int
	 */
	public static function getData()
	{

		return time();
	}
}
