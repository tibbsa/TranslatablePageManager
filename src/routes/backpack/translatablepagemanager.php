<?php

/*
|--------------------------------------------------------------------------
| Backpack\TranslatablePageManager Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Backpack\TranslatablePageManager package.
|
*/

Route::group([
    'namespace' => '',
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'prefix' => config('backpack.base.route_prefix', 'admin'),
], function () {
    $controller = config('backpack.translatablepagemanager.admin_controller_class', 'Backpack\TranslatablePageManager\app\Http\Controllers\Admin\PageCrudController');
    Route::crud('page', $controller);
});
