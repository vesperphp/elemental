<?php

namespace Elemental;

use Elemental\Api;
use Elemental\Route;
use Foundry\Foundry;
use Frontier\Service\Hook;

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

        Hook::clear();
        
        /**
         * After this is loaded
         * nothing else will run.
         */
    }

    public static function foundry($argv){

        //exec("npm run build");
        //exec("composer update");

        Foundry::paint($argv);

    }

}
