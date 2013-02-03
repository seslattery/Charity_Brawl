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

/**
 * Provides the necessary functions for displaying the charity page.
 *
 * @author Corbin Schwalm
 * @version 1.0
 */
class User {

    /** @var string The username. */
    private $username;

    /** @var string First name. */
    private $firstName;

    /** @var string Last name. */
    private $lastName;

    /** @var string The e-mail address. */
    private $email;

    /** @var string Text bio for the user. */
    private $bio;

    /**@var string The URL of the profile picture. */
    private $profilePicture;

    /** @var Badges[] Array of Badge objects. */
    private $badges;

    /** @var int Total amount of points for user. */
    private $totalPoints;

    /**
     * Default consturctor. Accepts an username to create the user object.
     *
     * @param string $username
     */
    public function __construct($username) {

        $this->username = $username;

        $this->dB = new Database();

        $info = $this->dB->getUserInfo($username);

        $this->username = $username;

        foreach ($info as $key => $value)
            $this->$key = $value;

    } //end __construct


    /**
     * Returns the user's first and last name.
     *
     * @return string The first and last name.
     */
    public function getFirstAndLastName() {

        return $this->firstName . ' ' . $this->lastName;
    }

    /* Getters */

    public function getUsername() {
        return $this->username;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getBio() {
        return $this->bio;
    }

    public function getProfilePicture() {
        return $this->profilePicture;
    }

    public function getBadges() {
        return $this->badges;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getEmail() {
        return $this->email;
    }

} //end User

?>