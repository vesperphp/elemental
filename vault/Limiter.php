<?php

namespace Elemental\Vault;

class Limiter{

  public static function throttle($input){

    $amount = $input[0];
    $interval = $input[1];
  
    $int = [
              'second'=>1,
              'minute'=>60,
              'hour'=>3600,
          ];

    // Check if the interval is known.
    if(in_array($interval, $int)){

        // Check the database table for a last-check value by IP
        //echo $amount. ' per '. $interval;
    }
          
    // dump($input);
           
    // if triggered:
    
    // die("Sorry, the maximum amount of requests is reached. Throtteling enabled. Try again in 1 {$interval}.");
  
  }

}
