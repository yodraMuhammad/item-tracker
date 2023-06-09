<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login',[
            'title' => 'Login - itemTracker',
        ]);
    }

    public function register()
    {
        return view('auth.register',[
            'title' => 'Register - itemTracker',
        ]);
    }

    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validated)){
            if(auth()->user()->active == 1){
                $request->session()->regenerate();
                return redirect()->intended('/');
            }else{
                return redirect('/login')->with('loginError','Account not active, please contact admin.');
            }
        }

        return redirect('/login')->with('loginError','Incorect username or password.');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255 ',
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/login')->with('success', 'Registrasion successfull !');
    }
}
