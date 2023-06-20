<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Session;


class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $data_user  = Auth::user();
            if(Auth::user()->hasRole('admin')) {
                Session::put('set_userdata', $data_user);
                return redirect()->intended('/admin/home')->with('success', 'Berhasil Login');
            }
            if(Auth::user()->hasRole('staff')) {
                Session::put('set_userdata', $data_user);
                return redirect()->intended('/admin/home')->with('success', 'Berhasil Login');
            }

            //Set session customer
            Session::put('set_customerdata', $data_user);
            return redirect()->intended('/')->with('success', 'Berhasil Login');
        }
        $user = User::where('email',$request->email)->first();
        $user1 = User::where('email','!=',$request->email)->first();
        if($user){
            if (Hash::check($request->password, $user->password, [])) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }else{
                return back()->with('error','Kata Sandi anda salah');
            }
        }else if($user1){
            if (Hash::check($request->password, $user1->password, [])) {
                return back()->with('error', 'Email yang anda masukkan salah');
            }else{
                return back()->with('error', 'Email dan kata sandi anda salah');
            }
        }

    }

    public function logout(Request $request){
        
$request->session()->flush();
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('login')->with('success', 'Berhasil Logout');
    }

    public function register(){
        return view('auth.register');
    }

    public function do_register(Request $request){        
        $request->validate([
                'username' => 'required',
                'name' => 'required',
                'email' => 'required|email|max:255',
                'nomortelepon' => 'required',
                'password' => 'required',
            ]);
        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomortelepon = $request->nomortelepon;
        $user->password = Hash::make($request->password);
        $user->assignRole('customer');
        $user->save();
        return redirect('login')->with('success', 'Registrasi berhasil!');
    }
}
