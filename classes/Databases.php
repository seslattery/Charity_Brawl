<?php

/*
 * Title: Charity Brawl
 * Date: 02/02/2013
 * Authors: Corbin Schwalm, Sean Slattery, Aaron Freth, Chris Norys
 * Version: 1.0
 *
 * This application provides the ability for average internet users to be able
 * to create a custom donation page for their cause. Website visitors are
 * encourged to donated to causes by means of a reward system.
 *
 * Main function starts below 'Application' class.
 */

/**
 * Provides the functionality to communicate with the database.
 *
 * @author Corbin Schwalm
 * @version 1.0
 */
class Databases {

    /** @var Mysqli The database object. */
    private $dB;

    /**
     * Default constructor to create the database object.
     */
    public function __construct() {

        $this->dB = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    } //end __construct

    /**
     * Sanitizes the passed in data be escaping it.
     *
     * @param E $input
     * @return E The sanitized data.
     */
    private function sanitize($input) {

        return $this->dB->real_escape_string($input);

    } //end sanitize

    /**
     * Gets the information about the supplied charity from the database.
     *
     * @param string $handle
     * @return string[]
     */
    public function getCharityInfo($handle) {

        $sql = "SELECT * FROM `charities` WHERE handle = '$this->sanitize($handle)' LIMIT 1";

        $result = $this->dB->query($sql);

        return $result->fetch_array();

    } //end getCharityInfo

} //end Databases

?>