<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function manageRole()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.manage-role', compact(['users','roles']));
    }

    public function updateRole(Request $request)
    {
         // Find the role name based on the role ID passed in the request
    $role = Role::find($request->role_id);

    // Check if the role exists
    if ($role) {
        // Update the user's role to the role's name
        User::where('id', $request->user_id)->update([
            'role' => $role->name  // Update with the role's name, not the ID
        ]);
    }
        return redirect()->back();
    }

}
