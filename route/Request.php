<?php

namespace Elemental\Route;

class Request{

    public static function get(){

        if(!empty($_GET)){
            return addslashes($_GET['path']);
        }

        return '/';

    }

    public static function post(){

        if(!empty($_POST)){
            return $_POST;
        }

        return false;

    }

    public static function set(){

        if(!empty($_POST)){
            return 'POST';
        }

        return 'GET';

    }

}