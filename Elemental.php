<?php

namespace Elemental;

use Route\Route;
use Elemental\Api;
use Frontier\Style;
use Foundry\Foundry;
use Sequel\Check\Check;
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

        Elemental::spin();

        if(Api::is()){
            
            /**
             * Define if we are working with an
             * API or with a regular route.
             */
            
            $r = new Api();
            $r->paint();
            $r->close();
            
        }else{
            
            /**
             * Build the assets.
             */

            Style::css();
            Style::js();

            /**
             * Fetch route info.
             */
            
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

    /**
     * This is the checker function
     * that knows when to shut down the 
     * site, or let it spin.
     */

    public static function spin(){


        /**
         * When needed files are not available
        */

        $files = [
            "Config" => "init/config",
            "Routes" => "init/routes",
            "Api" => "init/api",
            "Globals" => "init/globals",
            "Hooks" => "init/hooks"
        ];

        foreach($files as $name => $file){
            if(!file_exists(ROOTPATH."/".$file.".php")){
                die($name." file not availabe.");
            }
        }

        /**
         * When DB is not available...
         */

        $sequel = new Check;

        if(!$sequel->db()){
            die("Database not availabe.");
        }



    }

}
