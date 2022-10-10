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
        
        if(Api::is()){
            
            /**
             * Define if we are working with an
             * API or with a regular route.
             */
            
            $r = new Api();
            $r->paint();
            $r->close();
            
        }else{
            
            $r = new Route();
            $r->paint();
            $r->close();

        }
        /**
         * After this is loaded
         * nothing else will run.
         */
    }

    public static function foundry(){

        //exec("npm run build");
        exec("composer update");

    }

}
