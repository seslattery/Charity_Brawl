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
 * Provides the functionality for the photos of the application.
 * Functionality includes renaming by hash and resizing.
 *
 * @author Corbin Schwalm
 * @version 1.0
 */
class Photo {

    /**
     * Takes a hash of the photo and uses it to create a filename.
     *
     * @param string $file
     * @return string A new file name for the photo.
     */
    public static function rename($file) {

        $file = sha1($file);

        return substr($file, 5, 7);

    } //end rename

    /**
     * Checks to see if folder exists for the charity.
     *
     * @param string $filename
     * @return bool True if exists; false otherwise.
     */
    public static function checkDir($dirName) {

        if (is_dir('images/charity_images/$dirName'))
            return true;

        return false;
        
    } //end checkFile

} //end Photo
?>
