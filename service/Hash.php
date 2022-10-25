<?php

namespace Elemental\Auth;

class Hash{

        /**
         * Create a hash from a string (password)
         * If salt is added, it can be used....
         */

        public static function make(string $string, string $salt = '', string $encryption = 'sha256') {

                return hash($encryption, $string . $salt);

        }


        /**
         * Create a unique hash
         */

        public static function unique() {

                return self::make(uniqid());

        }

}
  
