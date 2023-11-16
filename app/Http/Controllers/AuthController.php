<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function forgot_password(Request $request)
    {
        return view('forgot_password');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        // dd($request->all());
        $user = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
        ]);

        $user = new User();
        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->phone = trim($request->phone);
        $user->save();

        return redirect('/')->with('success', 'Registration Successful');
    }

    public function CheckEmail(Request $request)
    {
        $email = $request->input('email');

        $isExists = User::where('email', $email)->first();

        if ($isExists) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }

    public function login_user(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::User()->is_role == "1") {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect('/')->with('error', 'Access Denied! Get admin Credential.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}