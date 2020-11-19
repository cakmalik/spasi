<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setup\Role;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Requests\MenuRequest;
use App\Models\Setup\{Menu,Setup};

class SetupController extends Controller
{
    public function setupTable()
    {
        $setups = Setup::latest()->paginate(30);
        return view('admin.setupTable',compact('setups'));
    }
    public function menuTable()
    {
        $menus = Menu::orderBy('id','asc')->paginate(10);
        $roles = Role::latest()->get();
        return view('admin.menuTable',compact('menus','roles'));
    }
    public function menuStore(MenuRequest $request)
    {
        Menu::create($request->all());
        return back();
    }
    public function userTable()
    {
        $users = User::latest()->paginate(10);
        return view('admin.userTable',compact('users'));
    }
}
