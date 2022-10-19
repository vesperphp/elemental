<?php

function _slug($content, $rand = false){

    $content = str_replace([' ','.',',','/',"\\",'%','^','&','*'],'',$content);

    $content = strtolower($content);

    if($rand==true){ $content = $content.substr(md5(rand(0,9999999999)),0,7); }
    
    return $content;
    
}