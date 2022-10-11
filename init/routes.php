<?php

use Elemental\Route;
use Elemental\Vault;

/**
 * The routes for the mandatory
 * pages within Elemental.
 */


/**
 * Standard Error routing that
 * returns a clean error page.
 */

Route::get('error/{code}', Error::class, 'view');