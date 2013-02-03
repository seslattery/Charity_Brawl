<?php

/*
 * Title: Charity Brawl
 * Date: 02/02/2013
 * Authors: Corbin Schwalm, Sean Slattery, Aaron Freth, Chris Norys.
 * Version: 1.0
 *
 * This application provides the ability for average internet users to be able
 * to create a custom donation page for their cause. Website visitors are
 * encourged to donated to causes by means of a reward system.
 *
 */

require_once ('includes/functions.php');

if ($_POST['username'] && $_POST['password']) {

    $dB = new Database();

    if ($dB->authenticate('username', 'password') === TRUE) {

        $_SESSION['username'] = $username;

        $_SESSION['key'] = LOGGED_IN_KEY;

        header('Location: index.php');

        exit;
    }

     header('Location: index.php?error=TRUE');

     exit;
}

require_once ('header.php');

?>