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
 * Main function starts below 'Charity' class.
 */

/**
 * Provides the necessary functions for displaying the charity page.
 *
 * @author Corbin Schwalm
 * @version 1.0
 */
class Charity {

    /** @var Database Storage for the database object. */
    private $dB;

    /** @var string The common name of the charity. */
    private $commonName;

    /** @var string The handle for the charity. */
    private $handle;

    /** @var string The charity description. */
    private $description;

    /** @var string URL to the charity image. */
    private $photoFilename;

    /** @var Reward[] Array for the rewards. */
    private $rewards;

    /**
     * Default constructor. This uses the charity handle to load the data
     * from the database.
     *
     * @param string $handle
     */
    public function __construct($handle) {

        if ($handle === NULL)
            return NULL;

        $this->dB = new Database();

        $info = $this->dB->getCharityInfo($handle);

        $this->handle = $handle;

        foreach ($info as $key => $value)
            $this->$key = $value;

    } //end __construct

    /* Getters */

     public function getCommonName() {
         return $this->commonName;
     }

     public function getDescription() {
         return $this->description;
     }

     public function getPhotoFilename() {
         return $this->photoFilename;
     }

     public function getRewards() {
         return $this->rewards;
     }

} //end Charity

?>