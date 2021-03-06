<?php namespace App\Widgets;
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Platform
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

class HelloWidget {

	/**
	 * Show a welcome message.
	 *
	 * @param  string  $name
	 * @return string
	 */
	public function show($name = null)
	{
		$name = $name ?: 'stranger';

		return "Hello {$name}!";
	}

}
