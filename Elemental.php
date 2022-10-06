<?php

namespace Elemental;

/**
 * Vesper PHP framework.
 */

class Elemental{

    /**
     * The only purpose of this class 
     * is to paint the page and do some 
     * stuff before and after.
     */

    public static function paint(){
        
        Route::paint();

        /**
         * After this is loaded
         * nothing else will run.
         */

    }

}