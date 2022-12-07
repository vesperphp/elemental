<?php
function dump($string, $file='unknown'){


    echo '<div style="background-color: black !important; color: white !important; padding: 20px 30px !important; font-family: arial, sans-serf !important; ">

    <h2 style="font-size: 20px !important; font-weight: lighter !important;">Debug information</h2><p>'.$file.'</p>';
    echo "<pre style='margin-top: 20px !important; border: 1px dashed white !important; padding: 20px !important; font-size: 13px !important; line-height: 1.5em !important;'><code>";

    var_dump($string);

    echo "</code></pre></div>";

}

function debug($string){

    var_dump($string);

}

function dd($string){

    dump($string);
    die();

}