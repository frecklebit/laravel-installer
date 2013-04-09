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

class Installer_Controller extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function action_index()
	{
		echo "Installer";
	}

	public function action_steps($step)
	{
		echo "STEP: ".$step;
	}

}