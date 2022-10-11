<?php

namespace Elemental\Fault;

use Elemental\Log;
use Elemental\Model;
use Frontier\Frontier;

class Error extends Model{
  
  /**
   * Basic error handling on the frontend
   * of the website. Helps Frontier.
   */
  public function view(){
    
    $code = $this->path['code'];
    
    $errors = [
      '404',
      '500'
    ];
    
    /**
     * Make sure the code is in the available 
     * list. This corresponds with the views
     * in the dir.
     */
    
    if(!in_array($code, $errors)){ $code = 404; }
    
    Frontier::view('error/'.$code.'.html');
    Log::to(['Error' => $code],'frontier');
    
  }
  
}
