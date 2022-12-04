<?php

/**
 * Load the required
 * routes and hooks.
 */

require_once ROOTPATH.'/vendor/vesperphp/elemental/init/routes.php';
require_once ROOTPATH.'/vendor/vesperphp/elemental/init/hooks.php';

/**
 * Helper & service 
 * functions.
 */

foreach (glob(ROOTPATH."/vendor/vesperphp/elemental/service/functions/*.php") as $filename){ require_once $filename; }
foreach (glob(ROOTPATH."/vendor/vesperphp/elemental/functions/*.php") as $filename){ require_once $filename; }
foreach (glob(ROOTPATH."/vendor/vesperphp/elemental/functions/forms/*.php") as $filename){ require_once $filename; }
foreach (glob(ROOTPATH."/vendor/vesperphp/elemental/functions/columns/*.php") as $filename){ require_once $filename; }

