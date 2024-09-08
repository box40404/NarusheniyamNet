<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $formData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($formData)){
            $request->session()->regenerate();
            
            return redirect()->intended();
        }
        else{
            return back()->with('error', 'Неправильный логин или пароль')
                                ->exceptInput('password');
        }

    }

    public function register(Request $request): RedirectResponse
    {
        $formData = $request->validate([
            'full_name' => 'max:128|required|regex:/^[\p{Cyrillic} ]+$/u',
            'username' => 'max:64|required|unique:users,username',
            'email' => 'email|max:256|required|unique:users,email',
            'phone' => 'size:17|required|regex:/\+\d\(\d\d\d\)-\d\d\d-\d\d-\d\d/',
            'password' => 'min:6|required|max:512'
        ]);

        $user = new User;

        $user->full_name = $formData['full_name'];
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->phone = $formData['phone'];
        $user->password = $formData['password'];

        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

    public function showLoginPage(Request $request)
    {
        return view('auth.login');
    }

    public function showRegisterPage()
    {
        return view('auth.register');
    }
}
