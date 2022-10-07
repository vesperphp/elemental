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
        
        $r = new Route();
        $r->paint();
        $r->close();

        /**
         * After this is loaded
         * nothing else will run.
         */

    }

}