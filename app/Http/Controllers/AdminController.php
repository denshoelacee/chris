<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    public function createAdminUser(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6',
        ]);

        $id = $this -> gen_random_adminid();
        // Create a new admin user using UserFeeder
        $user = User::createUser([
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'Admin', // Assign the role as Admin
        ]);

        return back()->with('success', 'Admin user created successfully.');
    }
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::where('role', '!=', 'rider')
        ->where(function ($query) {
            $query->where('role', '!=', 'admin')
                    ->where('role', '!=', 'supplier')
                ->orWhere('approved', '!=', true);
        })
        ->paginate(10);

    return view('admin.users', compact('users'));
    }

    public function manageRole()
    {
        $users = User::where('role', '!=', 'rider')->get();
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

    private function gen_random_adminid()
    {
        return random_int(100000, 999999); 
    }
}
