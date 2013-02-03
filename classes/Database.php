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
class Database {

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

        $sql = "SELECT * FROM `charities` WHERE handle = '" . $this->sanitize($handle) . "' LIMIT 1";

        $result = $this->dB->query($sql);

        if ($this->dB->error != '')
            die("Database Error");

        $result = $result->fetch_assoc();

        if (count($result) == 0)
            return NULL;

        return $result;

    } //end getCharityInfo

    /**
     * Gets the information about the supplied user from the database.
     *
     * @param string $username
     * @return string[]
     */
    public function getUserInfo($username) {

        $sql = "SELECT firstName, lastName, email, bio,
            profilePicture, badges FROM `users`
            WHERE username = '" . $this->sanitize($username) . "' LIMIT 1";

        $result = $this->dB->query($sql);

        if ($this->dB->error != '')
            die("Database Error");

        $result = $result->fetch_assoc();

        if (count($result) == 0)
            throw new Exception($ex);

        return $result;

    } //end getCharityInfo

    /**
     * Gets and returns a random charity object from the database.
     *
     * @param int $count = 1
     * @return Charity A charity object.
     */
    public function getRandomCharity($count = 1) {

        $sql = "SELECT * FROM `charities` ORDER BY RAND() LIMIT $count";

        $result = $this->dB->query($sql);

        if ($this->dB->error != '')
            die("Database Error");

        $results = array();

        $num = $this->dB->affected_rows;

       for ($i = 0; $i <= $num; $i++) {
           $results[$i] =  $result->fetch_array();
       }

        $c = array($count);

        for ($i = 0; $i < $num; $i++) {

             $c[$i] = new Charity($results[$i]['handle']);
        }

        return $c;
    } //end getRandomCharity

    /**
     * Accepts an username and password and determines if the combanation is
     * valid.
     *
     * @param string $username
     * @param string $password
     * @return bool True on success; false otherwise.
     */
    public function authenticate($username, $password) {

        $username = $this->sanitize($username);

        $password = $this->sanitize($password);

        $tHasher = new PasswordHash(8, TRUE);

        $hash = $tHasher->HashPassword($password);

        $sql = "SELECT username, password FROM `users` WHERE username =
            '$username' AND password = '$hash'";

        $this->dB->query($sql);

        if ($this->dB->affected_rows <= 0)
            return FALSE;

        $sql = "UPDATE `users` SET ipAddress = '" . $_SERVER['REMOTE_HOST'] . "',
            lastSignedIn = '" . date('Y-m-d') . "'";

        $this->dB->query($sql);

        return TRUE;

    } //end authenticate

} //end Databases

?>