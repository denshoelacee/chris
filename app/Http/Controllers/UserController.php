<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;  
    use Illuminate\Support\Facades\Log; // Add logging

    use App\Models\User;

    class UserController extends Controller
    {
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

            $user->delete();

            return redirect()->back()->with('success', 'User rejected successfully.');
        }
        public function index(){
            return view('/welcome');
        }

        public function show($id){
            return $id;
        }
    }
