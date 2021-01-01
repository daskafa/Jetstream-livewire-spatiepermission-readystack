<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// Models

use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', function () {
    return view('posts');
});

Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {

     // $perm = Permission::findById(5);
    // $perm->delete();

    // Role::create(['name' => 'writer']);
    // $Permission = Permission::create(['name' => 'write post']);

    // $role = Role::findById(5);
    // $role->givePermissionTo($Permission);

    // auth()->user()->givePermissionTo('edit post');

    // auth()->user()->assignRole('writer');

    // return auth()->user()->getAllPermissions();

    // return auth()->user()->removeRole('writer');

    // return User::permission('write post')->get();

    return view('dashboard');



})->name('dashboard');
