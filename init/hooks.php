<?php

use App\Assets\Assets;
use Frontier\Service\Hook;
use App\Controllers\HomeController;
use Interact\Service\InteractNavigation;

/**
 * Admin panel
 * hooks.
 */

/**
 * Admin panel header
 */ 

Hook::asset('admin_head', 'AssetFilterAdminHead', [Assets::class,'head']);

/**
 * Admin panel body
 */

Hook::asset('admin_body', 'AssetFilterAdminBody', [Assets::class,'body']);

/**
 * Admin panel footer
 */

Hook::asset('admin_foot', 'AssetFilterAdminFoot', [Assets::class,'foot']);

/**
 * Admin panel navigation
 */

Hook::asset('admin_nav', 'AssetAdminNavigationUsers', [InteractNavigation::class,'users'], 10);
Hook::asset('admin_nav', 'AssetAdminNavigationDashboard', [InteractNavigation::class,'dashboard'], 0);
Hook::asset('admin_nav', 'AssetAdminNavigationApi', [InteractNavigation::class,'api'], 90);
Hook::asset('admin_nav', 'AssetAdminNavigationVault', [InteractNavigation::class,'vault'], 60);

