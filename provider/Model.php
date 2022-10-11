<?php

namespace Elemental;

use Elemental\Re;
use Elemental\Vault\Cross;
use Elemental\Route\Request;



class Model{


    public $path;
    
    /**
     * Fetch all the request information
     * and store it in a variable for
     * future use.
     */

    public function __construct(){

        // CSRF protection
        $this->csrf();
    
    }

    /**
     * Define all the database tables for
     * Elementary (rename)
     */

    public function path($path){
           $this->path = $path;
    }

    /**
     * Cross Site Request Forgery
     * is automatically enabled
     * on all forms connected to
     * this Model
     */

    public function csrf(){

        /**
         * Cross site request forgery 
         * is triggered by POST
         */ 
        
        if(!empty(Request::post()) && !Cross::path()){

            /**
             * Redirect to 500 page
             */

            Re::direct('error/500');
            
        } 
        
    }
    
}
