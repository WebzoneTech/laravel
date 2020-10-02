<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $permission = Permission::create(['name'=>'User Delete']);
        $role = Role::findById(2);
        $permission = Permission::findById(6);
        // $role->givePermissionTo($permission);
        // auth()->user()->givePermissionTo('write');
        // auth()->user()->assignRole('News Editor');
        // return auth()->user()->permissions;
        // $permission->removeRole($role);
        // $permission->removePermission('write');
        // $permission->revokePermissionTo('edit');



        return view('Admin.index');
    }
}
