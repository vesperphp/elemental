<?php

namespace Elemental\Auth;

use Config\Config;


class Salt{

        /**
         * Create a random salt with 
         * the config salt in the mix
         */

        public static function shake(int $length=20) {

                $string = substr(str_shuffle(MD5(Config::get('vault/salt').microtime())), 0, $length);

                return $string;

        }

}
  
