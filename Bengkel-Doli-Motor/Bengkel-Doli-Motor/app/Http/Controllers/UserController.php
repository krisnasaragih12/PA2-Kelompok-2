<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $user = User::with('roles')->get();
        return view('admin.user', compact('user'));
    }

    public function setStaff($id){
        $user = User::findOrFail($id);
        $user->syncRoles('staff');
        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    public function setUser($id){
        $user = User::findOrFail($id);
        $user->syncRoles('customer');
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
