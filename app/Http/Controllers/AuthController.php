<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginStore(Request $request){
        $request->validate([
            'nip' => 'required|numeric',
            'password' => 'required',
        ]);

        $data = $request->only('nip', 'password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            
            return redirect()->route('viewProfil');
        }
        return back()->with('error', 'nip atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function updatePass()
    {
        $user = auth()->user();

        $bks = User::find($user->nip);
        return view('auth.password', compact('bks'));
    }

    public function ubahPassword(Request $request)
    {
        if(!Hash::check($request->passwordLama, auth()->user()->password)){
            return back()->with('error', 'password lama tidak sesuai!');
        }

        if($request->passwordBaru != $request->repeatPassword){
            return back()->with('error', 'password baru tidak sama!');
        }
        auth()->user()->update([
            'password' => Hash::make($request->passwordBaru),
        ]);
        return redirect()->route('viewProfil');
    }
}
