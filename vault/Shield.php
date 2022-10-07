<?php

namespace Elemental\Vault;

use Elemental\Re;
use Elemental\Log;

class Shield{

  
  /**
   * Session based gatekeepers:
   */

  public function hasSession($redirect = ''){

    /**
     * If the userid is set and is not zero
     * then pass on (true), the user must be logged
     * in by now..
     */

    if(isset($_SESSION['userid']) && $_SESSION['userid']!=0){
      return true;
    }

    Log::to(['Constraint' => 'has session'],'shield');
    Re::direct($redirect);
    //return false;

  }

  public function noSession($redirect = ''){

    /**
     * If the userid is not set then redirect
     * because the user must not be logged in
     * at this point. If it is, return true.
     */

    if(isset($_SESSION['userid']) && $_SESSION['userid']!=0){

      Log::to(['Constraint' => 'no session'],'shield');
      Re::direct($redirect);
      //return false;

    }

    return true;

  }

  public function hasRole($alowedRoles = []){

    /**
     * Is the user alowed to
     * visit this part by role?
     */

     return true;


  }

}
