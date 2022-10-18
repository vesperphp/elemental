<?php

/**
 * Load the required
 * routes and hooks.
 */

require_once ROOTPATH.'/vendor/vesperphp/elemental/init/routes.php';

/**
 * Helper & service 
 * functions.
 */

foreach (glob(ROOTPATH."/vendor/vesperphp/elemental/service/functions/*.php") as $filename){ require_once $filename; }
