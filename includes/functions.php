<?php

/*
 * Filename: functions.php
 * Date: 01/29/2013
 *
 * This file contains the non-OOP functions for this application including
 * the auto-loading functionality of classes.
 */

require_once('configuration.php');

function autoload($class_name) {

	$file = 'classes/' . $class_name . '.php';

	if (file_exists($file)) {

		require_once($file);
	}
}

spl_autoload_register('autoload');

?>