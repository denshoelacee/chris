<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loadRegister()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('/auth/register');
    }

    public function register(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6',
            'role' => 'string|required|in:Rider,Admin,Supplier' // Validate role field
        ]);

        // Create a new user and assign values
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role; // Assign the role
        $user->save();

        return redirect('/')->with('success', 'Your registration has been successful.');
    }

    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('/auth/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){
            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('admin.dashboard');
    }

    public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 'Admin'){
            $redirect = '/admin/dashboard';
        } else if(Auth::user() && Auth::user()->role == 'Supplier'){
            $redirect = '/supplier/dashboard';
        } else if(Auth::user() && Auth::user()->role == 'Rider'){
            $redirect = '/rider/dashboard';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->approved = true; // Set approved status to true
        $user->save();

        return redirect()->back()->with('success', 'User approved successfully.');
    }

    public function reject($id)
    {
        $user = User::findOrFail($id);
        $user->approved = false; // Set approved status to false
        $user->save();

        return redirect()->back()->with('success', 'User rejected successfully.');
    }
}
