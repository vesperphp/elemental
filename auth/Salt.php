<?php

namespace Elemental\Auth;

use Elemental\Config;

class Salt{

        /**
         * Create a random salt with 
         * the config salt in the mix
         */

        public static function salt(int $length=20) {

                $string = substr(str_shuffle(MD5(Config::get('vault/salt').microtime())), 0, $length);

                return $string;

        }

}
  
