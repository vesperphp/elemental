<?php

use Route\Route;
use Elemental\Fault\Error;
use Interact\Dash\RolesController;
use Interact\Dash\TeamsController;
use Interact\Dash\UsersController;
use Interact\Dash\DashboardController;


/**
 * The routes for the mandatory
 * pages within Elemental.
 */


/**
 * Standard Error routing that
 * returns a clean error page.
 */

Route::get('error/{code}', Error::class, 'view');


$adminPanelRights = [
    //    [Vault::class, 'hasRole', [1]],
    ];
    
/**
 * Dashboard:
 */
    
Route::get('admin/', DashboardController::class, 'index', $adminPanelRights);

/**
 * User management:
 */

Route::get('admin/users/', UsersController::class, 'index', $adminPanelRights);

Route::get('admin/user/new/', UsersController::class, 'create', $adminPanelRights);
Route::post('admin/user/new/', UsersController::class, 'insert', $adminPanelRights);

Route::get('admin/user/edit/{id}', UsersController::class, 'edit', $adminPanelRights);
Route::post('admin/user/edit/{id}', UsersController::class, 'update', $adminPanelRights);

Route::get('admin/user/delete/{id}', UsersController::class, 'delete', $adminPanelRights);
Route::post('admin/user/delete/{id}', UsersController::class, 'destroy', $adminPanelRights);

/**
 * Roles management:
 */

Route::get('admin/roles/', RolesController::class, 'index', $adminPanelRights);

Route::get('admin/role/new/', RolesController::class, 'create', $adminPanelRights);
Route::post('admin/role/new/', RolesController::class, 'insert', $adminPanelRights);

Route::get('admin/role/edit/{id}', RolesController::class, 'edit', $adminPanelRights);
Route::post('admin/role/edit/{id}', RolesController::class, 'update', $adminPanelRights);

Route::get('admin/role/delete/{id}', RolesController::class, 'delete', $adminPanelRights);
Route::post('admin/role/delete/{id}', RolesController::class, 'destroy', $adminPanelRights);


/**
 * Teams management:
 */

Route::get('admin/teams/', TeamsController::class, 'index', $adminPanelRights);

Route::get('admin/team/new/', TeamsController::class, 'create', $adminPanelRights);
Route::post('admin/team/new/', TeamsController::class, 'insert', $adminPanelRights);

Route::get('admin/team/edit/{id}', TeamsController::class, 'edit', $adminPanelRights);
Route::post('admin/team/edit/{id}', TeamsController::class, 'update', $adminPanelRights);

Route::get('admin/team/delete/{id}', TeamsController::class, 'delete', $adminPanelRights);
Route::post('admin/team/delete/{id}', TeamsController::class, 'destroy', $adminPanelRights);
