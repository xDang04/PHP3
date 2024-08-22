<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            //login success
            if(Auth::user()->role == '1'){
                return redirect()->route('admin.product.listProducts');
            }
        } else {
            return redirect('login');
        }
    }
    public function postRegister(Request $req){
        $check = User::where('email', $req->email)->exists();
        if($check){
            if($req->password === $req->confirmPassword){
                $data = [
                    'name' => $req->name,
                    'email' => $req->email,
                    'password' =>  Hash::make($req->password),
                //    'remember_token' => str_random(10),
                ];
                User::create($data);
                // dki thanh cong
            }
            // ritun confim kh khop
            return redirect()->back()->with('error', 'confirm kh khop');
        }else{
            // return email da ton tai
            return redirect()->back()->with('error', 'email da ton tai');
        }
    }

        
}
