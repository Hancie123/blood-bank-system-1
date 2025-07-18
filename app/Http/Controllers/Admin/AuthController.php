<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginIndex(){
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        try {
            if (!Auth::attempt($credentials)) {
                sweetalert()->addWarning('Invalid email or password.');
                return back();
            }

            $user = Auth::user();

            if ($user->role === 'admin') {
                sweetalert()->addSuccess('Welcome ' . $user->name);
                return redirect('admin/dashboard');
            }

            sweetalert()->addWarning('Invalid email or password.');
            return back();
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            auth()->logout();

            sweetalert()->addSuccess('Logout Successfully!');
            return redirect('admin/login');
        } else {
            sweetalert()->addWarning('User is not authenticated!');
            return redirect('admin/login');
        }
    }
}