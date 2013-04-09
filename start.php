<?php
/**
 * Part of the Elabra Labs Installer bundle for Laravel.
 *
 * NOTICE OF LICENSE
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 * @package    Laravel Installer
 * @version    1.0
 * @author     Adam Jenkins (adamcole83@gmail.com)
 * @license    GNU LESSER GENERAL PUBLIC LICENSE
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @link       http://elabralabs.com
 */

/*
|--------------------------------------------------------------------------
| Laravel Installer Library
|--------------------------------------------------------------------------
|
| Map Laravel Installer Library using PSR-0 standard namespace.
|
*/

Autoloader::map(array(
	'Installer' => Bundle::path('installer') . 'installer.php',
));