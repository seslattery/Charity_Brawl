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


//$handle = explode("\/\\", $_SERVER['SCRIPT_NAME']);

if (empty($_GET['charityName']))
    die('Can\'t access access this page directly.');

$handle = $_GET['charityName'];

$c = new Charity($handle) //test


?>

<?= $c->getCommonName(); ?>
