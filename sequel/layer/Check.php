<?php

namespace Sequel\Check;

use PDO;
use Logger\Log;
use PDOException;
use Config\Config;

class Check{


    public function db(){

        /**
         * Start an instance
         * with a database 
         * connection.
         */

        $dsn = sprintf( 'mysql:dbname=%s;host=%s;port=%s', Config::get('mysql/db'), Config::get('mysql/host'), Config::get('mysql/port') );

        try {

            /**
             * Build the PDO instance
             * with the config data.
             */

            $db = new PDO ( $dsn, Config::get('mysql/user'), Config::get('mysql/pass'));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            return true;

        } catch (PDOException $e) {

            /**
             * If it fails we'll write
             * to the logger and die 
             * with an error message.
             */
            
            $error = $e->getMessage();
            Log::to(['DB Connection failed' => $error],'sequel');

            //die("No database connection.");
            return false;

        }

    }

}