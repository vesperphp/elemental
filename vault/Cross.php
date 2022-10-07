<?php

namespace Elemental\Vault;

use Elemental\Auth\Hash;

class Cross{
 
  public static function Plant(){
   
    $_SESSION['_csrf_hash'] = Hash::unique();
    
    return $_SESSION['_csrf_hash'];
    
  }
  
  // Use: 
  // {{ _csrf(); }}
  
  
  public static function Path(){
   
    if(isset($_POST['_csrf_hash']) && isset($_SESSION['_csrf_hash']) && $_SESSION['_csrf_hash'] == $_POST['_csrf_hash']){
     
      // empty hash
      unset($_SESSION['_csrf_hash']);

      return true;  
     
    }
    
    // empty hash
    unset($_SESSION['_csrf_hash']);

    return false;
    
  }
  
  
  
}
