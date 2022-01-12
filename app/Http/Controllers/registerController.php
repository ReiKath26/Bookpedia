<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class registerController extends Controller
{
    public function Register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|unique:users',
            'password'=>'required|min:8',
            'address'=>'required|min:10',
            'phoneNumber'=>'required|min:10',
        ]);

        User::create([
            'name' => $request->fullname,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone'=>$request->phoneNumber,
        ]);

        return redirect('/');
    }    
    
    

    
}
