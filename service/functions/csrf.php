<?php

use Elemental\Vault\Cross;


function _csrf(){
 
  $html = "<input type='hidden' ";
  $html .= "name='_csrf_hash' ";
  $html .= "value='".Cross::plant()."' ";
  $html .= " />";
  
  echo $html;  
  
}
