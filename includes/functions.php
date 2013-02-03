<?php

/*
 * Filename: functions.php
 * Date: 01/29/2013
 *
 * This file contains the non-OOP functions for this application including
 * the auto-loading functionality of classes.
 */

require_once('configuration.php');

/*
 * Checks to see if the current user is logged in.
 * If $redirect is set to TRUE, send the user to the login page.
 */
function isLoggedIn($redirect = FALSE) {

    if ($_SESSION['username'] && $_SESSION['key'] === LOGGED_IN_KEY)
        return TRUE;

    if ($redirect === TRUE) {

        header ('Location: login.php');

        exit;
    }

    return FALSE;
}

function autoload($class_name) {

	$file = 'classes/' . $class_name . '.php';

	if (file_exists($file)) {

		require_once($file);
	}
}

spl_autoload_register('autoload');

session_start();

?>